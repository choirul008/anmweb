<?php

namespace App\Models;


class Post
{
    private static $blog_post =[
    [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Choirul Anam",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae possimus officia tempore, veritatis aliquid dicta? Id quaerat minima culpa nam aperiam! Blanditiis illo quod, laboriosam placeat deleniti, quo vero cum quaerat dolorum dignissimos, ea corporis obcaecati quis sit praesentium! Neque, porro labore dignissimos adipisci, rem quas nesciunt, quae id necessitatibus maiores culpa? Ut ex consequatur amet debitis ratione error animi, eos soluta molestiae? Itaque sit corrupti perferendis explicabo optio voluptate. Corrupti, iusto blanditiis est mollitia aspernatur ex dolorem ducimus cupiditate dolores voluptates dignissimos, sequi rem ratione similique deleniti officiis suscipit autem doloremque cum praesentium? Dignissimos quibusdam libero quaerat labore nemo!"
    ],
    [
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Paijo",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae possimus officia tempore, veritatis aliquid dicta? Id quaerat minima culpa nam aperiam! Blanditiis illo quod, laboriosam placeat deleniti, quo vero cum quaerat dolorum dignissimos, ea corporis obcaecati quis sit praesentium! Neque, porro labore dignissimos adipisci, rem quas nesciunt, quae id necessitatibus maiores culpa? Ut ex consequatur amet debitis ratione error animi, eos soluta molestiae? Itaque sit corrupti perferendis explicabo optio voluptate. Corrupti, iusto blanditiis est mollitia aspernatur ex dolorem ducimus cupiditate dolores voluptates dignissimos, sequi rem ratione similique deleniti officiis suscipit autem doloremque cum praesentium? Dignissimos quibusdam libero quaerat labore nemo!"
    ],
]; 

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
