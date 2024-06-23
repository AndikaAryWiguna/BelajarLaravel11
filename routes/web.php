<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostControler;
use App\Models\Kategori;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


// AUTHENTIFICATION
// Login
Route::get('/login', [AuthController::class, 'login' ])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate' ]);
Route::post('/logout', [AuthController::class, 'logout' ]);

// Register
Route::get('/register', [AuthController::class, 'register' ])->middleware('guest');
Route::post('/register', [AuthController::class, 'store' ]);

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index' ])->middleware('auth');

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});
Route::get('/about', function () {
    return view('about', ['nama'=>'Made Andika Ary Wiguna','title' => 'About']);
});

// BLOG
Route::get('/posts', [PostControler::class, 'index']);
Route::get('/posts/{post:slug}', [PostControler::class, 'show']);
// Route::get('/authors/{user:username}', [PostControler::class, 'author']);
// Route::get('/kategoris/{kategori:slug}', [PostControler::class, 'kategori']);

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
