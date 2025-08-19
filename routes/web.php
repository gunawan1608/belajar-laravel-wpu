<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home Page'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'name' => 'Gunawan Madia Pratama',
        'title' => 'About'
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact'
    ]);
});

Route::get('/posts', function () {
    $post = Post::get();
    return view('posts', [
        'title' => 'Article', 'posts' => $post
    ]);
});

Route::get('/posts/{post:slug}', function(Post $post){
    return view('post', [
        'title' => 'Article',
        'post' => $post
    ]);
});

Route::get('/authors/{user:username}', function(User $user){
    return view('posts', [
        'title' => count($user->posts) . ' Articles by ' . $user->name,
        'posts' => $user->posts
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('posts', [
        'title' => ' Articles in : ' . $category->tags,
        'posts' => $category->posts
    ]);
});

Route::get('/menu', [MenuController::class, 'index']);


