<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PostController extends Controller
{
    public function index()
    {
        // dd(request('search'));
        $title = '';
        if (request('category')) {
            // find a category that has slug 
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('posts', [
            "title" => "All Posts" . $title,
            "active" => 'posts',
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7),
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
