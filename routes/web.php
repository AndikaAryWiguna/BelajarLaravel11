<?php

use App\Http\Controllers\PostControler;
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

Route::get('/posts', [PostControler::class, 'index']);
Route::get('/posts/{post:slug}', [PostControler::class, 'show']);
// Route::get('/authors/{user:username}', [PostControler::class, 'author']);
// Route::get('/kategoris/{kategori:slug}', [PostControler::class, 'kategori']);

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
