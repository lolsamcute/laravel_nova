<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    
     public function allPost()
    {
        $posts = Post::get();
        return view('allposts', [
            
            'posts' => $posts
            
        ]);
    }
    
    
    public function create()
    {
        return view('createPost');
    }
    
     public function createPost(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'description' => 'required|string',
        ]);

        $posts = new Post();

        $posts->name = $request->name;
        $posts->description = $request->description;
        $posts->save();

        return redirect('allPost')->with('success', 'Post Created');
    }
    
    
    
     public function edit($id)
    {
        $posts = Post::where('id', $id)->first();
        
        return view('editPost', [
            
            'posts' => $posts
        ]);
    }
    
     public function editPost(Request $request, $id)
    {

        $posts = Post::where('id', $id)->update([
            
            'name' => $request->name,
            'description' => $request->description,

        ]);

        return redirect('allPost')->with('success', 'Post Edited');
    }
    
    
    public function delete($id)
{
    try {
        $post = Post::findOrFail($id); // Find the post by ID
        $post->delete(); // Soft delete the post

        return redirect('allPost')->with('success', 'Post deleted successfully.');
    } catch (\Exception $e) {
        return redirect('allPost')->with('error', 'Error deleting post: ' . $e->getMessage());
    }
}
    
    
    
}
