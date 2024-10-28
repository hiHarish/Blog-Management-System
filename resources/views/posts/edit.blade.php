@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')
    <h2>Edit Blog Post</h2>
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3" style="text-align: center">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{ old('title', $post->title) }}" required>
        </div>
        
        <div class="mb-3" style="text-align: center">
            <label for="content">Content:</label>
            <textarea id="content" name="content" rows="15" cols="75" required>{{ old('content', $post->content) }}</textarea>
        </div>

        <div class="mb-3" style="text-align: center">
            <label for="author">Author:</label>
            <input type="text" id="author" name="author" value="{{ old('author', $post->author) }}" required>
        </div>

        <div class="mb-3" style="text-align: center"><button type="submit" class="btn btn-primary">Update Post</button></div>
    </form>
@endsection
