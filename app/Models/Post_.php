<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post 
{
    private static $blog_posts = [   
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ardi Tsudhady",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos reiciendis ut sunt alias nihil minus corrupti repellendus, voluptates ratione exercitationem vel sint libero odio distinctio pariatur? A dolorem, facilis porro assumenda quaerat veniam nobis dicta corporis debitis suscipit maxime dolore ab consectetur ipsum tenetur atque quisquam architecto omnis labore officia adipisci dolores esse! Saepe officiis nisi a labore consequatur enim! Ipsum est dolores dignissimos iste ad tempore facilis maiores, beatae quasi deserunt consequuntur molestias provident ab, vel laboriosam neque voluptatibus!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Diah Ayu",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas totam a ut amet fugiat repellendus molestiae expedita aperiam, suscipit veritatis consequatur minima velit neque praesentium sunt corrupti impedit, maiores minus. Sequi iure distinctio ipsum repudiandae fugit at et dolorem dignissimos. Velit, temporibus. Laudantium doloribus at similique repudiandae, aliquam unde neque? Neque, repudiandae impedit necessitatibus sint iure debitis odit ut cupiditate quos accusamus quae nulla, iusto voluptatem quo quas beatae eaque eligendi similique dolores. Harum, a. Nisi iste aspernatur nostrum officia, similique sed eaque quis, debitis, excepturi quibusdam incidunt velit nulla assumenda. Provident quisquam doloremque quidem voluptas magnam impedit, porro exercitationem."
        ] 
        ];

        public static function all() 
        {
            return collect(self::$blog_posts);
        }

        public static function find($slug) 
        {
            $posts = static::all();

            // $post = [];
            // foreach ($posts as $p) {
            //     if($p["slug"] === $slug) {
            //         $post = $p
            //         ;
            //     }
            // }

            return $posts->firstwhere('slug', $slug);
        }
 
}
