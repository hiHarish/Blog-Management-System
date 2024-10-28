<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\BlogPost;

class ImageController extends Controller
{
    public function index()
    {
        $blogPosts = BlogPost::all();
        dd($blogPosts);
        return view('index', compact('blogPosts'));
    }
    public function upload(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');

            // Store blog post with image path
            BlogPost::create([
                'title' => $request->title,
                'content' => $request->content,
                'image_path' => $path,
            ]);

            return redirect()->back()->with('success', 'Blog post created successfully!');
        }

        return redirect()->back()->with('error', 'Please select an image to upload.');
    }
    public function show($id)
{
    $blogPost = BlogPost::findOrFail($id);

    return view('show', compact('blogPost'));
}

}

