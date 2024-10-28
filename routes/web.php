<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
Route::get('/', [PostController::class, 'index']); // This should point to your posts index page.
Route::resource('posts', PostController::class); // This creates resource routes for posts.

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');   // creaate post
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');           // Store new post
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');         // View single post
Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');    // Edit form
Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');     // Update post
Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy'); // Delete post
Route::post('/posts/{id}/comments', [CommentController::class, 'store'])->name('comments.store');
Route::post('/upload-image', [ImageController::class, 'upload'])->name('uploadImage');
Route::get('/blog/{id}', [ImageController::class, 'show'])->name('blog.show');
Route::get('/blogs', [ImageController::class, 'index'])->name('blogs.index');

/*Route::get('/', function () {
    return view('posts/index');
});*/
