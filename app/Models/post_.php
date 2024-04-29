<?php

namespace App\Models;


class post
{
   private static $blog_post = [
    [
          "title" => "lokasi kami",
          "slug" => "judul-post-pertama",
          "author" => "Ajri muhammad sidik",
          "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate cum possimus
          consequatur deserunt modi totam ad repellat,
          magni veritatis dignissimos cupiditate, quos, nostrum animi sed dolores mollitia quis atque quibusdam!"

    ],
    [
          "title" => "lokasi jalan katapang",
          "slug" => "judul-post-kedua",
          "author" => "shiddik",
          "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate cum possimus
          consequatur deserunt modi totam ad repellat,
          magni veritatis dignissimos cupiditate, quos, nostrum animi sed dolores mollitia quis atque quibusdam!"

    ],
    [
          "title" => "lokasi sakit rumah",
          "slug" => "judul-post-ketiga",
          "author" => "muhammad",
          "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate cum possimus
          consequatur deserunt modi totam ad repellat,
          magni veritatis dignissimos cupiditate, quos, nostrum animi sed dolores mollitia quis atque quibusdam!"

    ],
   ];

   public static function all(){
     return collect(self::$blog_post);
   }

   public static function find($slug){
    $post = static::all();



    // foreach($post as $p){
    //     if($p["slug"] === $slug){
    //         $post = $p;
    //     }
    // }
      return $post->firstwhere('slug', $slug);
   }

}
