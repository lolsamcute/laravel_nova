<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Str;
use Ramsey\Uuid\Uuid;

class BlogController extends Controller
{

    /**
     * Index Blog.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function blogIndex(Request $request)
    {
        $filter = $request->input('filter', 'all');

        $blogs = DB::connection('sqlsrv')
            ->table('BlogPost')
            ->select(
                DB::raw('CONVERT(VARCHAR(255), BlogPost.Id) AS Id'), // Assuming Id is a UUID
                'BlogPost.Title',
                'BlogPost.Thumbnail',
                'BlogPost.Description',
                'BlogPost.Category',
                'BlogPost.IsVisible',
                'BlogPost.WithComment',
                'BlogPost.CreatedAt',
                'BlogPost.ReadMinutes',
                'BlogPost.LikeCount'
            )
            ->latest('BlogPost.CreatedAt')
            ->paginate(10); // Set the number of items per page

           $blogsWithCommentCount = DB::connection('sqlsrv')
                ->table('BlogPost')
                ->select(DB::raw('CONVERT(VARCHAR(255), BlogPost.Id) AS Id'), DB::raw('COUNT(Comment.BlogId) as comment_count'))
                ->leftJoin('Comment', 'BlogPost.Id', '=', DB::raw('CONVERT(VARCHAR(255), Comment.BlogId)'))
                ->groupBy(DB::raw('CONVERT(VARCHAR(255), BlogPost.Id)'))
                ->get();

            foreach ($blogsWithCommentCount as $blog) {
                $blogId = $blog->Id;
                $countComments = DB::connection('sqlsrv')
                    ->table('Comment')
                    ->where('BlogId',  $blogId)
                    ->count();

                return view('pages.blog.index', [
                        'filter' => $filter,
                        'blogs' => $blogs,
                        'countComments' => $countComments,
                    ]);
            }



    }


     /**
     * Show Blog by Title.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function show($Id)
    {

        $blog = DB::connection('sqlsrv')
            ->table('BlogPost')
            ->select(
                DB::raw('CONVERT(VARCHAR(255), BlogPost.Id) AS Id'), // Assuming Id is a UUID
                'BlogPost.Title',
                'BlogPost.Thumbnail',
                'BlogPost.Description',
                'BlogPost.Category',
                'BlogPost.IsVisible',
                'BlogPost.WithComment',
                'BlogPost.CreatedAt',
                'BlogPost.ReadMinutes',
                'BlogPost.LikeCount'
            )
            ->where('Id', $Id)
            ->first();

        if (!$blog) {
            // Handle the case where the blog post with the given title is not found
            abort(404);
        }

        $comments = DB::connection('sqlsrv')
            ->table('Comment')
            ->select(
                'Comment.Contents',
                'Comment.ReaderId',
                //'Comment.CreatedAt', // Tell Stephen to add ths to the DB
            )
            ->where('BlogId',  $blog->Id)
            ->get();

        $countComments = DB::connection('sqlsrv')
            ->table('Comment')
            ->where('BlogId',  $blog->Id)
            ->count();


        $latestBlog = DB::connection('sqlsrv')
            ->table('BlogPost')
            ->select(
                DB::raw('CONVERT(VARCHAR(255), BlogPost.Id) AS Id'), // Assuming Id is a UUID
                'BlogPost.Title',
                'BlogPost.Thumbnail',
                'BlogPost.Description',
                'BlogPost.CreatedAt',
            )
            ->latest('BlogPost.CreatedAt')
            ->take(6)
            ->get();

        return view('pages.blog.view', [
            'blog' => $blog,
            'comments' => $comments,
            'countComments' => $countComments,
            'latestBlog' => $latestBlog
        ]);
    }


    /**
     * Create Blog
     *
     * @return \Illuminate\Contracts\Support\Renderable
    */

    public function createBlog(Request $request)
    {
        $categories =  DB::connection('sqlsrv')->table('BlogCategories')->select('Category')->get();
        return view('pages.blog.create', [

            'categories' => $categories
        ]);

    }

    public function createBlogPost(Request $request)
    {

        try{
            $image = $request->file('Thumbnail');
            if ($image) {
                $imageExtension = $image->extension();
                $imageFileName = time().'.'.$imageExtension;
                $path = $request->file('Thumbnail')->store('blog/blogpost', 's3');
                //$path = Storage::disk('s3')->put('blog/blogpost', $imageFileName);
                $Thumbnail = Storage::disk('s3')->url($path);

                // Insert the blog post into the database (modify this according to your database structure)
                $postId = DB::connection('sqlsrv')->table('BlogPost')->insert([
                    'UserID' => Str::uuid()->toString(),
                    'Id' => Str::uuid()->toString(),
                    'Title' => $request->input('Title'),
                    'Category' => $request->input('Category'),
                    'ImageTitle' => $request->input('ImageTitle'),
                    'ThumbnailCaption' => $request->input('ThumbnailCaption'),
                    'ThumbnailAlt' => $request->input('ThumbnailAlt'),
                    'UrlSlug' => $request->input('UrlSlug'),
                    'Description' => $request->input('Description'),
                    'Thumbnail' => $Thumbnail,
                    'WithComment' => true,
                    'IsVisible' => true,
                    'Likes' => false,
                    'LikeCount' => false,
                    'CreatedAt' => now(),
                ]);

            } else {

                $postId = DB::connection('sqlsrv')->table('BlogPost')->insert([
                    'Id' => Str::uuid()->toString(),
                    'Title' => $request->input('Title'),
                    'Category' => $request->input('Category'),
                    'ImageTitle' => $request->input('ImageTitle'),
                    'ThumbnailCaption' => $request->input('ThumbnailCaption'),
                    'ThumbnailAlt' => $request->input('ThumbnailAlt'),
                    'UrlSlug' => $request->input('UrlSlug'),
                    'Description' => $request->input('Description'),
                    'WithComment' => true,
                    'IsVisible' => true,
                    'Likes' => false,
                    'LikeCount' => false,
                    'CreatedAt' => now(),
                ]);

            }


            // Redirect or return a response as needed
            return back()->with('success', 'Blog created successfully');

        }catch (\Exception $exception){

             return back()->with('error', 'Error Creating Blog');
        }
    }


    public function likePost(Request $request, $Id)
    {
        // Get the user's email from the request or session
        $getBlog = DB::connection('sqlsrv')->table('BlogPost')->where('Id', $Id)->first();

        // Update the likes table
          $uuid = Uuid::uuid4(); // Generate a UUID
         $getBlog = DB::connection('sqlsrv')->table('BlogReader')->insert([
            'Id' => $uuid,
            'Name' => "Admin",
            'Email' => "admin@kreatsell.com",
            'Likes' => true,
            'PostId' => Str::uuid($Id)->toString(),
            'TimeLiked' => now(),
            'ReaderId' => NULL,
            'BlogPostId' => NULL

        ]);

        // Increment the like count in the BlogPost table
        $getExistingPostLike = $getBlog->LikeCount ?? 0;

        // Update the BlogPost table
        DB::connection('sqlsrv')->table('BlogPost')->where('Id', $Id)->update([
            'LikeCount' => $getExistingPostLike + 1
        ]);

       return back()->with('success', 'Post Liked successfully');
    }


    /**
     * Edit Blog
     *
     * @return \Illuminate\Contracts\Support\Renderable
    */
    public function editBlog(Request $request, $Id)
    {

        try{

            $edit = DB::connection('sqlsrv')->table('BlogPost')->where('Id', $Id)->first();
            $categories =  DB::connection('sqlsrv')->table('BlogCategories')->select('Category')->get();
            return view('pages.blog.edit', [

                'edit' => $edit,
                'categories' => $categories
            ]);

        }catch (\Exception $exception){

             return back()->with('error', 'Error locating Blog');
        }
    }


    public function editPost(Request $request, $Id)
    {

        try{

            $image = $request->file('Thumbnail');

            // Check if a new image is provided
            if ($image) {
                $imageExtension = $image->extension();
                $imageFileName = time() . '.' . $imageExtension;
                $path = $request->file('Thumbnail')->storeAs('blog/blogpost', $imageFileName, 's3');
                $Thumbnail = Storage::disk('s3')->url($path);
            } else {
                // If no new image is provided, keep the existing one
                $existingBlog = DB::connection('sqlsrv')->table('BlogPost')->where('Id', $Id)->first();
                $Thumbnail = $existingBlog->Thumbnail;
            }

            // Update the blog post in the database
            DB::connection('sqlsrv')->table('BlogPost')->where('Id', $Id)->update([
                'Title' => $request->input('Title'),
                'Category' => $request->input('Category'),
                'ImageTitle' => $request->input('ImageTitle'),
                'ThumbnailCaption' => $request->input('ThumbnailCaption'),
                'ThumbnailAlt' => $request->input('ThumbnailAlt'),
                'UrlSlug' => $request->input('UrlSlug'),
                'Description' => $request->input('Description'),
                'Thumbnail' => $Thumbnail,
                'WithComment' => true,
                'IsVisible' => true,
                'Likes' => false,
                'LikeCount' => false,
                'CreatedAt' => now(),
            ]);


            // Redirect or return a response as needed
            return back()->with('success', 'Blog Edited successfully');

        }catch (\Exception $exception){

            return back()->with('error', 'Error Editing Blog');
        }
    }



    /**
     * Create Blog Category
     *
     * @return \Illuminate\Contracts\Support\Renderable
    */
    public function createCategoryPost(Request $request)
    {

        try{

            DB::connection('sqlsrv')->table('BlogCategories')->insert([
                'Id' => Str::uuid()->toString(),
                'Category' => $request->input('Category'),
                'DateCreated' => now(),

            ]);


            return back()->with('success', 'Category created successfully');

        }catch (\Exception $exception){

             return back()->with('error', 'Error Creating Category');
        }
    }


    /**
     * Create Blog Comment
     *
     * @return \Illuminate\Contracts\Support\Renderable
    */
    public function commentPost(Request $request, $Id)
    {

        try{
            $blog = DB::connection('sqlsrv')->table('BlogPost')->where('Id', $Id)->first();

            DB::connection('sqlsrv')->table('Comment')->insert([
                'Id' => Str::uuid()->toString(),
                'Contents' => $request->input('Contents'),
                'BlogId' => $request->blogID,
                'ReaderId' => 'N/A',
                'CommentedOn' => now(),

            ]);


            return back()->with('success', 'Comment successfully');

        }catch (\Exception $exception){

             return back()->with('error', 'Error Commenting');
        }
    }



    /**
     * Delete Blog
     *
     * @return \Illuminate\Contracts\Support\Renderable
    */
    public function deleteBlog(Request $request, $Id)
    {

        try{

            DB::connection('sqlsrv')->table('BlogPost')->where('Id', $Id)->delete();
            return back()->with('success', 'Blog created successfully');

        }catch (\Exception $exception){

             return back()->with('error', 'Error Creating Blog');
        }
    }




    /**
     * Unpublish Blog
     *
     * @return \Illuminate\Contracts\Support\Renderable
    */
    public function unpublishBlog(Request $request, $Id)
    {

        try{

            DB::connection('sqlsrv')->table('BlogPost')->where('Id', $Id)->update([

                'IsVisible' => false,
            ]);

            return back()->with('success', 'Blog Unpublish successfully');

        }catch (\Exception $exception){

             return back()->with('error', 'Error Unpublishing Blog');
        }
    }



}
