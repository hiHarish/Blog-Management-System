@extends('layouts.app')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
    <a href="{{ url('/') }}">Back to Posts</a>

    <h2>Comments</h2>
    <ul>
        @foreach ($post->comments as $comment)
            <li>
                <strong>{{ $comment->author_name }}</strong>
                <p>{{ $comment->content }}</p>
            </li>
        @endforeach
    </ul>

    <h3>Add a Comment</h3>
    <form action="{{ url('/comment/store') }}" method="POST">
        @csrf
        <input type="hidden" name="post_id" value="{{ $post->id }}">
        <label for="author_name">Name:</label>
        <input type="text" name="author_name" required>
        
        <label for="content">Comment:</label>
        <textarea name="content" required></textarea>
        
        <button type="submit">Submit Comment</button>
    </form>
@endsection
