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
        return self::$blog_posts;
    }
}
//use self::$blog_posts <- if the variable is static
//use this->$blog_posts <- if the variable is normal property
