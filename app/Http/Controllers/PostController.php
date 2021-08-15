<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "Post",
            "posts" => Post::all()

        ]);
    }

    public function show(Post $post)
    {

        return view('single_post', [
            "title" => "Single Post",
            "data" => $post
        ]);
    }
}
