<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    public function index()
    {
        // Display a list of posts (for users with appropriate permissions)
        if (Gate::allows('view-posts')) {
            $posts = Post::all();
            return view('posts.index', compact('posts'));
        } else {
            abort(403, 'Unauthorized action.');
        }
    }

    public function create()
    {
        // Display the create post form (for users with appropriate permissions)
        if (Gate::allows('create-posts')) {
            return view('posts.create');
        } else {
            abort(403, 'Unauthorized action.');
        }
    }

    public function store(Request $request)
    {
        // Store a new post (for users with appropriate permissions)
        if (Gate::allows('create-posts')) {
            // Validate and store the post data
            $validatedData = $request->validate([
                'title' => 'required|max:255',
                'content' => 'required',
            ]);

            Post::create($validatedData);

            return redirect()->route('posts.index')->with('success', 'Post created successfully.');
        } else {
            abort(403, 'Unauthorized action.');
        }
    }

    public function show(Post $post)
    {
        // Display a single post (for users with appropriate permissions)
        if (Gate::allows('view-posts')) {
            return view('posts.show', compact('post'));
        } else {
            abort(403, 'Unauthorized action.');
        }
    }

    public function edit(Post $post)
    {
        // Display the edit post form (for users with appropriate permissions)
        if (Gate::allows('edit-posts')) {
            return view('posts.edit', compact('post'));
        } else {
            abort(403, 'Unauthorized action.');
        }
    }

    public function update(Request $request, Post $post)
    {
        // Update an existing post (for users with appropriate permissions)
        if (Gate::allows('edit-posts')) {
            // Validate and update the post data
            $validatedData = $request->validate([
                'title' => 'required|max:255',
                'content' => 'required',
            ]);

            $post->update($validatedData);

            return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
        } else {
            abort(403, 'Unauthorized action.');
        }
    }

    public function destroy(Post $post)
    {
        // Delete a post (only for super admins)
        if (Gate::allows('delete-posts')) {
            $post->delete();
            return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
        } else {
            abort(403, 'Unauthorized action.');
        }
    }
}
