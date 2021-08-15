<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "autor" => "Rahmad Ade Akbar",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore accusamus corrupti voluptatum velit vero. Ut saepe illo quaerat error fuga voluptatem nesciunt molestias deleniti consequatur nulla voluptate nostrum repudiandae dolorem modi officiis aliquam, aspernatur laudantium distinctio! Commodi, necessitatibus, ipsa perspiciatis ad officia aspernatur nihil, harum doloremque natus ratione laboriosam fuga asperiores fugiat enim aliquam at id iure quas nisi dolorem assumenda adipisci quam! Quos, cupiditate natus! Illo optio, nesciunt qui, reprehenderit excepturi nihil mollitia vero ipsa ad voluptatem, eligendi quod?"
        ],

        [
            "title" => "Judul Post Kedua",
            "slug" => "judul post kedua",
            "autor" => "Munawar",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur nostrum labore dignissimos necessitatibus explicabo blanditiis alias, placeat enim, doloremque dolor ab quisquam cupiditate illo est! Nisi, ex! A veniam magnam qui, magni aperiam consectetur est quasi eveniet dicta laudantium quaerat eaque soluta laborum voluptatum in sit accusantium ipsa rem praesentium labore voluptas exercitationem molestias doloremque voluptatem. At incidunt, voluptate ducimus id rerum sed ipsum repellat est, vel aliquam doloribus dolor officia. Necessitatibus nemo tempore quae. Illo eaque porro architecto maiores dolorem, laboriosam possimus numquam magnam velit magni. Vitae, quidem quis. Commodi doloribus, similique magnam modi incidunt illo numquam minima culpa!"
        ],


    ];

    public static  function all()
    {
        return self::$blog_post;
    }


    public static function find($slug)
    {
        $posts = self::$blog_post;

        $new_post = [];
        foreach ($posts as $data) {
            if ($data["slug"] === $slug) {
                $new_post = $data;
            }
        }

        return $new_post;
    }
}
