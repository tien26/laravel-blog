<?php

namespace App\Models;

class Post_
{
    private static $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Irfan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis officiis distinctio eveniet error beatae pariatur sunt ipsa quos blanditiis quo, dolores corrupti qui hic quaerat sint id. Et hic debitis quaerat, magnam exercitationem adipisci fugit ipsa earum molestias nostrum pariatur, labore, explicabo eius ad distinctio accusantium numquam eveniet. Nihil necessitatibus explicabo, dolor asperiores sed harum praesentium. Nulla eligendi recusandae ab blanditiis. Tempora consequuntur maiores rem beatae labore neque deserunt nostrum aliquam quam veniam, pariatur quod ducimus eaque ullam, magni consectetur?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "ainun",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis officiis distinctio eveniet error beatae pariatur sunt ipsa quos blanditiis quo, dolores corrupti qui hic quaerat sint id. Et hic debitis quaerat, magnam exercitationem adipisci fugit ipsa earum molestias nostrum pariatur, labore, explicabo eius ad distinctio accusantium numquam eveniet. Nihil necessitatibus explicabo, dolor asperiores sed harum praesentium. Nulla eligendi recusandae ab blanditiis. Tempora consequuntur maiores rem beatae labore neque deserunt nostrum aliquam quam veniam, pariatur quod ducimus eaque ullam, magni consectetur?"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $blogs = static::all();
        return $blogs->firstWhere('slug',$slug);
    }
}
