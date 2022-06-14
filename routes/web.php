<?php

use App\Models\Post;
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

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Reza",
        "email" => "rezaarya511@gmail.com",
        "image" => "monke.jpg",
    ]);
});



Route::get('/posts', function () {

    return view('posts', [
        "title" => "Posts",
        "posts" => Post::all(),
    ]);
});

Route::get('posts/{slug}', function ($slug) {
<<<<<<< HEAD
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Sandhika Galih",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores doloremque et molestiae ab tempora reiciendis dolor explicabo, harum atque esse."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua", 
            "author" => "July Bayann",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores doloremque et molestiae ab tempora reiciendis dolor explicabo, harum atque esse."
        ],
        [
            "title" => "Judul Post Ketiga",
            "slug" => "judul-post-ketiga",
            "author" => "Yoga Karnaya",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores doloremque et molestiae ab tempora reiciendis dolor explicabo, harum atque esse."
        ],

    ];
=======
>>>>>>> origin/main

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post,
    ]);
});