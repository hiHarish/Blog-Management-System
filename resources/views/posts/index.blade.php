@extends('layouts.app')

@section('title', 'All Blog Posts')

@section('content')<div >
    <h2 style="text-align:center">All Blog Posts</h2><hr>
    <div class="grid text-center" ><ul>
        @foreach ($posts as $post)
            
            <li class="d-inline-flex focus-ring py-1 px-2 text-decoration-none"  >
           <div class="g-col-6 g-col-md-4 card" style="width: 500px; text-overflow: ellipsis; ">    
    <img src="..." alt="..." style="background-color:#474747;height:300px;">
           <div class="card-body"> 
                <a href="{{ route('posts.show', $post->id) }}"><b><h2>{{ $post->title }}<h2></b></a><br><br>
                 <a class="btn btn-outline-secondary" href="{{ route('posts.edit', $post->id) }}">Edit</a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                </form></div></div>
            </li>
        @endforeach
    </ul></div></div>
@endsection
