<?php

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

Route::get('/', function () {
    return view('home', [
        "title" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Bahrul Ulum",
        "email" => "203040089@mail.unpas.ac.id",
        "image" => "a.jpg"
    ]);
});



Route::get('/posts', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Bahrul Ullum",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, facere! Voluptates a rem est officia nisi odit qui, reprehenderit molestias! Neque inventore molestiae mollitia itaque tenetur, voluptate similique suscipit tempora aperiam dolorum iusto placeat veritatis animi labore illo minus dolorem nesciunt, dolore veniam. Quae obcaecati numquam accusantium qui? Non distinctio, atque nihil rerum vero veritatis sint, dignissimos ducimus minima consectetur debitis amet libero fugit consequuntur inventore hic? Natus autem fugit pariatur temporibus, repellat eos? Sit animi quos dignissimos quibusdam alias."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Agung Septiana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, facere! Voluptates a rem est officia nisi odit qui, reprehenderit molestias! Neque inventore molestiae mollitia itaque tenetur, voluptate similique suscipit tempora aperiam dolorum iusto placeat veritatis animi labore illo minus dolorem nesciunt, dolore veniam. Quae obcaecati numquam accusantium qui? Non distinctio, atque nihil rerum vero veritatis sint, dignissimos ducimus minima consectetur debitis amet libero fugit consequuntur inventore hic? Natus autem fugit pariatur temporibus, repellat eos? Sit animi quos dignissimos quibusdam alias.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, facere! Voluptates a rem est officia nisi odit qui, reprehenderit molestias! Neque inventore molestiae mollitia itaque tenetur, voluptate similique suscipit tempora aperiam dolorum iusto placeat veritatis animi labore illo minus dolorem nesciunt, dolore veniam. Quae obcaecati numquam accusantium qui? Non distinctio, atque nihil rerum vero veritatis sint, dignissimos ducimus minima consectetur debitis amet libero fugit consequuntur inventore hic? Natus autem fugit pariatur temporibus, repellat eos? Sit animi quos dignissimos quibusdam alias."
        ]
    ];
    return view('posts', [
        "title" => "Post", "posts" => $blog_posts
    ]);
});

Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Bahrul Ullum",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, facere! Voluptates a rem est officia nisi odit qui, reprehenderit molestias! Neque inventore molestiae mollitia itaque tenetur, voluptate similique suscipit tempora aperiam dolorum iusto placeat veritatis animi labore illo minus dolorem nesciunt, dolore veniam. Quae obcaecati numquam accusantium qui? Non distinctio, atque nihil rerum vero veritatis sint, dignissimos ducimus minima consectetur debitis amet libero fugit consequuntur inventore hic? Natus autem fugit pariatur temporibus, repellat eos? Sit animi quos dignissimos quibusdam alias."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Agung Septiana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, facere! Voluptates a rem est officia nisi odit qui, reprehenderit molestias! Neque inventore molestiae mollitia itaque tenetur, voluptate similique suscipit tempora aperiam dolorum iusto placeat veritatis animi labore illo minus dolorem nesciunt, dolore veniam. Quae obcaecati numquam accusantium qui? Non distinctio, atque nihil rerum vero veritatis sint, dignissimos ducimus minima consectetur debitis amet libero fugit consequuntur inventore hic? Natus autem fugit pariatur temporibus, repellat eos? Sit animi quos dignissimos quibusdam alias.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, facere! Voluptates a rem est officia nisi odit qui, reprehenderit molestias! Neque inventore molestiae mollitia itaque tenetur, voluptate similique suscipit tempora aperiam dolorum iusto placeat veritatis animi labore illo minus dolorem nesciunt, dolore veniam. Quae obcaecati numquam accusantium qui? Non distinctio, atque nihil rerum vero veritatis sint, dignissimos ducimus minima consectetur debitis amet libero fugit consequuntur inventore hic? Natus autem fugit pariatur temporibus, repellat eos? Sit animi quos dignissimos quibusdam alias."
        ]
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
