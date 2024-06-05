<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostControler extends Controller
{
    public function index()
    {
        return view('posts', [
            'title' => 'Blog', 
            'posts' => Post::all()
        ]);
    }
    
    public function show(Post $post){
        return view('post', [
            'title' => 'Single Post', 
            'post' => $post
        ]);
    }

    public function author(User $user){
        return view('posts', [
            'title' =>count($user->posts) . ' Artikel by : '. $user->name, 
            'posts' => $user->posts
        ]);
    }

    public function kategori(Kategori $kategori){
        return view('posts', [
            'title' =>'Artikel in: '. $kategori->name, 
            'posts' => $kategori->posts
        ]);
    }

}
