<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $id)
    {
        $request->validate([
            'author' => 'required|string|max:255',
            'content' => 'required',
        ]);

        $post = Post::findOrFail($id);

        $post->comments()->create([
            'author' => $request->input('author'),
            'content' => $request->input('content'),
        ]);

        return redirect()->route('posts.show', $id)->with('success', 'Comment added successfully!');
    }
}