@extends('layouts.app')

@section('title', 'Create Blog Post')

@section('content')
    <h2>Create a New Blog Post</h2>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('posts.store') }}" method="POST" >
        @csrf
        <div class="mb-3" style="text-align: center">
            <label for="title"><b>Title:</b></label>
            <input type="text" id="title" name="title" value="{{ old('title') }}" required>
        </div>

        

        <div class="mb-3" style="text-align: center">
            <label for="content"><b>Content:</b></label>
            <textarea id="content" name="content" rows="15" cols="75" required>{{ old('content') }}</textarea>
        </div>
        
        <div class="mb-3" style="text-align: center">
            <label for="author"><b>Author:</b></label>
            <input type="text" id="author" name="author" value="{{ old('author') }}" required>
        </div>

        <div style="text-align: center"><button type="submit" class="btn btn-primary" >Create Post</button></div>
        <form action="{{ route('uploadImage') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="image">Choose an image:</label>
    <input type="file" name="image" id="image">
    <button type="submit">Upload Image</button>
</form>
    </form>
@endsection
