@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <div class="mb-3" style="text-align: center">
    <h2>{{ $post->title }}</h2>
    <div style="text-align:left"><p class="px-5">{{ $post->content }}</p></div>
    <p><strong>Author:</strong> {{ $post->author }}</p></div>

    <!-- Display Comments Section -->
    <h3>Comments</h3><hr>
    @if ($post->comments && $post->comments->count() > 0)
        <ul>
            @foreach ($post->comments as $comment)
                <li>
                    <strong>{{ $comment->author }}:</strong> {{ $comment->content }}
                </li>
            @endforeach
        </ul>
    @else
        <p>No comments available.</p>
    @endif

    <!-- Add a New Comment Form -->
    <h4>Add a Comment</h4>
    <form action="{{ route('comments.store', $post->id) }}" method="POST">
        @csrf
        <div>
            <label for="author">Name:</label>
            <input type="text" id="author" name="author" required>
        </div>

        <div>
            <label for="content">Comment:</label>
            <textarea id="content" name="content" rows="3" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit Comment</button>
    </form>

    <a class="btn btn-outline-secondary" href="{{ route('posts.index') }}">Back to All Posts</a>
@endsection
