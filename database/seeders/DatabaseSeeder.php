<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        User::create([
            'name'      => 'Ardi Tsudhady',
            'username'  => 'arditsudhady',
            'email'     => 'tsudhadyardi@gmail.com',
            'password'  => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Sektiawan',
        //     'email' => 'sektiawan@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Design Gravis',
            'slug' => 'design-gravis'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolorum nostrum tempora rem recusandae doloribus ab id, voluptates nisi consequatur, soluta nobis maxime incidunt iusto quo, fugit accusamus odit laborum.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, vel cumque asperiores cum veniam officia repellendus rerum unde voluptatem maxime quasi maiores, placeat alias at odio consequuntur consequatur? Quo totam accusantium, debitis reiciendis saepe minus provident blanditiis perferendis ipsa possimus nihil exercitationem, quasi obcaecati laboriosam reprehenderit asperiores! Debitis, non.</p><p>Perspiciatis quae, consequuntur suscipit excepturi error quas fugit dolores voluptatum deleniti cum laborum dolorum atque minima illo delectus aliquid omnis, numquam nam iste? Placeat est quam esse voluptatem nemo tempora harum similique ex facilis, molestiae a perferendis amet ipsum sed aspernatur recusandae dolorum nihil reprehenderit nulla? Itaque reiciendis dolores voluptatem. Mollitia assumenda commodi, possimus odit consequatur dolorem! Pariatur culpa dolores quia corporis aspernatur tempora! Iste at placeat numquam aliquid, optio autem.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolorum nostrum tempora rem recusandae doloribus ab id, voluptates nisi consequatur, soluta nobis maxime incidunt iusto quo, fugit accusamus odit laborum.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul ke Dua',
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolorum nostrum tempora rem recusandae doloribus ab id, voluptates nisi consequatur, soluta nobis maxime incidunt iusto quo, fugit accusamus odit laborum.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, vel cumque asperiores cum veniam officia repellendus rerum unde voluptatem maxime quasi maiores, placeat alias at odio consequuntur consequatur? Quo totam accusantium, debitis reiciendis saepe minus provident blanditiis perferendis ipsa possimus nihil exercitationem, quasi obcaecati laboriosam reprehenderit asperiores! Debitis, non.</p><p>Perspiciatis quae, consequuntur suscipit excepturi error quas fugit dolores voluptatum deleniti cum laborum dolorum atque minima illo delectus aliquid omnis, numquam nam iste? Placeat est quam esse voluptatem nemo tempora harum similique ex facilis, molestiae a perferendis amet ipsum sed aspernatur recusandae dolorum nihil reprehenderit nulla? Itaque reiciendis dolores voluptatem. Mollitia assumenda commodi, possimus odit consequatur dolorem! Pariatur culpa dolores quia corporis aspernatur tempora! Iste at placeat numquam aliquid, optio autem.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolorum nostrum tempora rem recusandae doloribus ab id, voluptates nisi consequatur, soluta nobis maxime incidunt iusto quo, fugit accusamus odit laborum.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul ke Tiga',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolorum nostrum tempora rem recusandae doloribus ab id, voluptates nisi consequatur, soluta nobis maxime incidunt iusto quo, fugit accusamus odit laborum.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, vel cumque asperiores cum veniam officia repellendus rerum unde voluptatem maxime quasi maiores, placeat alias at odio consequuntur consequatur? Quo totam accusantium, debitis reiciendis saepe minus provident blanditiis perferendis ipsa possimus nihil exercitationem, quasi obcaecati laboriosam reprehenderit asperiores! Debitis, non.</p><p>Perspiciatis quae, consequuntur suscipit excepturi error quas fugit dolores voluptatum deleniti cum laborum dolorum atque minima illo delectus aliquid omnis, numquam nam iste? Placeat est quam esse voluptatem nemo tempora harum similique ex facilis, molestiae a perferendis amet ipsum sed aspernatur recusandae dolorum nihil reprehenderit nulla? Itaque reiciendis dolores voluptatem. Mollitia assumenda commodi, possimus odit consequatur dolorem! Pariatur culpa dolores quia corporis aspernatur tempora! Iste at placeat numquam aliquid, optio autem.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolorum nostrum tempora rem recusandae doloribus ab id, voluptates nisi consequatur, soluta nobis maxime incidunt iusto quo, fugit accusamus odit laborum.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul ke Empat',
        //     'category_id' => 3,
        //     'user_id' => 2,
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolorum nostrum tempora rem recusandae doloribus ab id, voluptates nisi consequatur, soluta nobis maxime incidunt iusto quo, fugit accusamus odit laborum.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, vel cumque asperiores cum veniam officia repellendus rerum unde voluptatem maxime quasi maiores, placeat alias at odio consequuntur consequatur? Quo totam accusantium, debitis reiciendis saepe minus provident blanditiis perferendis ipsa possimus nihil exercitationem, quasi obcaecati laboriosam reprehenderit asperiores! Debitis, non.</p><p>Perspiciatis quae, consequuntur suscipit excepturi error quas fugit dolores voluptatum deleniti cum laborum dolorum atque minima illo delectus aliquid omnis, numquam nam iste? Placeat est quam esse voluptatem nemo tempora harum similique ex facilis, molestiae a perferendis amet ipsum sed aspernatur recusandae dolorum nihil reprehenderit nulla? Itaque reiciendis dolores voluptatem. Mollitia assumenda commodi, possimus odit consequatur dolorem! Pariatur culpa dolores quia corporis aspernatur tempora! Iste at placeat numquam aliquid, optio autem.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolorum nostrum tempora rem recusandae doloribus ab id, voluptates nisi consequatur, soluta nobis maxime incidunt iusto quo, fugit accusamus odit laborum.</p>'
        // ]);
    }
}
