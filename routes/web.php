<?php

use App\Models\Kategori;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});
Route::get('/about', function () {
    return view('about', ['nama'=>'Made Andika Ary Wiguna','title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => Post::all()]);
});
Route::get('/posts/{post:slug}', function(Post $post){
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});
Route::get('/authors/{user:username}', function(User $user){
    return view('posts', ['title' =>count($user->posts) . ' Artikel by : '. $user->name, 'posts' => $user->posts]);
});
Route::get('/kategoris/{kategori:slug}', function(Kategori $kategori){
    return view('posts', ['title' =>'Artikel in: '. $kategori->name, 'posts' => $kategori->posts]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
