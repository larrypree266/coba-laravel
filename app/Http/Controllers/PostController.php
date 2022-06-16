<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "All Posts",
            "posts" => Post::latest()->get(),
            // "posts" => Post::all(),
        ]);
    }

    // Since we're using collection, Post model doesn't contain a slug
    // this is Route-model binding
    public function show(Post $post)
    // public function show($id)
    {
        return view('post', [
            "title" => "Single Post",
            "post" => $post,
            // "post" => Post::find($id),
        ]);
    }
}
