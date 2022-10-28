<?php

namespace App\Models;


class Post
{
    private static $blog_post = [
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

    public static function  all(){
        return collect(self::$blog_post);
    }

    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
