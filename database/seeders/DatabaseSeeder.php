<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Choirul Anam',
            'username' => 'choirulanam',
            'email' => 'choirul.anam@kodingworks.io',
            'password' => bcrypt('123456')
        ]);

        // User::create([
        //     'name' => 'Anam',
        //     'email' => 'anam@kodingworks.io',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        Category::create([
        'name' => 'Personal',
            'slug' => 'personal',
        ]);


        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Post Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'head Postingan',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit placeat aliquid inventore sed obcaecati vero ex magnam, quos veniam voluptates quisquam eius consequatur architecto quasi, saepe quas dolores illo nesciunt itaque quis deleniti. Officia repudiandae quibusdam necessitatibus quo sit quaerat id nihil, voluptate iste maiores ex quae, dolores eos sed.',
        //     'category_id'=> 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Post Kedua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'head Postingan',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit placeat aliquid inventore sed obcaecati vero ex magnam, quos veniam voluptates quisquam eius consequatur architecto quasi, saepe quas dolores illo nesciunt itaque quis deleniti. Officia repudiandae quibusdam necessitatibus quo sit quaerat id nihil, voluptate iste maiores ex quae, dolores eos sed.',
        //     'category_id'=> 1,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Post ketiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'head Postingan 3',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit placeat aliquid inventore sed obcaecati vero ex magnam, quos veniam voluptates quisquam eius consequatur architecto quasi, saepe quas dolores illo nesciunt itaque quis deleniti. Officia repudiandae quibusdam necessitatibus quo sit quaerat id nihil, voluptate iste maiores ex quae, dolores eos sed.',
        //     'category_id'=> 2,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Post empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'head Postingan 4',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit placeat aliquid inventore sed obcaecati vero ex magnam, quos veniam voluptates quisquam eius consequatur architecto quasi, saepe quas dolores illo nesciunt itaque quis deleniti. Officia repudiandae quibusdam necessitatibus quo sit quaerat id nihil, voluptate iste maiores ex quae, dolores eos sed.',
        //     'category_id'=> 3,
        //     'user_id' => 1
        // ]);
    }
}
