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


        if (request('search')) {
            $posts
                ->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('body', 'like', '%' . request('search') . '%');
        }

        return view('posts', [
            "title" => "All Posts",
            "active" => 'posts',
            "posts" => $posts->get(),
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
