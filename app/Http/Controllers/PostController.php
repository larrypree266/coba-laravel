<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PostController extends Controller
{
    public function index()
    {
        // dd(request('search'));
        $posts = Post::latest();

        return view('posts', [
            "title" => "All Posts",
            "active" => 'posts',
            "posts" => Post::latest()->filter(request(['search']))->get(),
        ]);
    }

    public function show(Post $post)

    {
        return view('post', [
            "title" => "Single Post",
            "post" => $post,
            "active" => 'posts'
        ]);
    }
}
