<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all(); // Retrieve all posts
        return view('posts.index', compact('posts')); // Pass posts to the view
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create'); // Show the create form view
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // Validate the form data
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required',
        'author' => 'required|string|max:255',
    ]);

    // Create a new post with the validated data
    Post::create($validatedData);

    return redirect()->route('posts.index')->with('success', 'Blog post created successfully!');

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id); // Find the post or return a 404 error
        return view('posts.show', compact('post'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id); // Find the post or return a 404 error
        return view('posts.edit', compact('post'));    
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'author' => 'required|string|max:255',
        ]);

        $post = Post::findOrFail($id);
        $post->update($validatedData);
        return redirect()->route('posts.index')->with('success', 'Blog post updated successfully!');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id); // Find the post
        $post->delete(); // Delete the post
    
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully!');
    
        //
    }
}
