<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserPostController;

Route::get('/', function () {
    return view('welcome');
});

// Rutas para el proyecto de usuarios y publicaciones
Route::get('/users', [UserPostController::class, 'index'])->name('users.index');
Route::get('/users/{id}/posts', [UserPostController::class, 'userPosts'])->name('users.posts');
Route::get('/users-with-posts', [UserPostController::class, 'usersWithPosts'])->name('users.with-posts');
Route::get('/users-with-count', [UserPostController::class, 'usersWithPostCount'])->name('users.with-count');
Route::get('/users-with-published-posts', [UserPostController::class, 'usersWithPublishedPosts'])->name('users.with-published-posts');
Route::get('/posts', [UserPostController::class, 'postsWithAuthors'])->name('posts.index');
Route::get('/posts/published', [UserPostController::class, 'publishedPosts'])->name('posts.published');
