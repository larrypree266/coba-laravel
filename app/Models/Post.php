<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
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

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
        // $posts = self::blog_posts;
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }  
        // }
        // return $post;
    }
}

//use self::$blog_posts <- if the variable is static
//use this->$blog_posts <- if the variable is normal property