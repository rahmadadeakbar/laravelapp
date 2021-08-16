<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// route home
Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

// route about
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Rahmad Ade Akbar",
        "email" => "rahmadadeakbar@gmail.com",
        "gambar" => "ade.jpeg"
    ]);
});


// route posts
Route::get('/posts', [PostController::class, 'index']);


// route halaman singgle post
Route::get(
    'post/{post:slug}',
    [PostController::class, 'show']

    // $blog_post = [
    //     [
    //         "title"=>"Judul Post Pertama",
    //         "slug"=>"judul-post-pertama",
    //         "autor"=>"Rahmad Ade Akbar",
    //         "body"=>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore accusamus corrupti voluptatum velit vero. Ut saepe illo quaerat error fuga voluptatem nesciunt molestias deleniti consequatur nulla voluptate nostrum repudiandae dolorem modi officiis aliquam, aspernatur laudantium distinctio! Commodi, necessitatibus, ipsa perspiciatis ad officia aspernatur nihil, harum doloremque natus ratione laboriosam fuga asperiores fugiat enim aliquam at id iure quas nisi dolorem assumenda adipisci quam! Quos, cupiditate natus! Illo optio, nesciunt qui, reprehenderit excepturi nihil mollitia vero ipsa ad voluptatem, eligendi quod?"
    //     ],

    //     [
    //         "title"=>"Judul Post Kedua",
    //         "slug"=>"judul post kedua",
    //         "autor"=>"Munawar",
    //         "body"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur nostrum labore dignissimos necessitatibus explicabo blanditiis alias, placeat enim, doloremque dolor ab quisquam cupiditate illo est! Nisi, ex! A veniam magnam qui, magni aperiam consectetur est quasi eveniet dicta laudantium quaerat eaque soluta laborum voluptatum in sit accusantium ipsa rem praesentium labore voluptas exercitationem molestias doloremque voluptatem. At incidunt, voluptate ducimus id rerum sed ipsum repellat est, vel aliquam doloribus dolor officia. Necessitatibus nemo tempore quae. Illo eaque porro architecto maiores dolorem, laboriosam possimus numquam magnam velit magni. Vitae, quidem quis. Commodi doloribus, similique magnam modi incidunt illo numquam minima culpa!"
    //     ],

    // ];

    // $new_post = [];
    // foreach ($blog_post as $post) {
    //     if($post["slug"]=== $slug){
    //         $new_post = $post;
    //     }
    // }

    // return view('single_post', [
    //     "title" => "Single Post",
    //     "data" => Post::find($slug)
    // ]);
);


// Route Model Binding category
Route::get('/category/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => "Post By Category : $category->name",
        'posts' => $category->post->load('category', 'autor'),
        // 'category' => $category->name
    ]);
});



Route::get('/categories', function () {

    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});



// route autor

Route::get('/autors/{autor:username}', function (User $autor) {

    return view('posts', [

        'title' => "Post By Autor : $autor->name",
        'posts' => $autor->post->load('category', 'autor'),

    ]);
});
