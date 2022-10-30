<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Bahrul ulum',
            'email' => '203040089@mail.unpas.ac.id',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Agung septiana',
            'email' => '203040102@mail.unpas.ac.id',
            'password' => bcrypt('54321')
        ]);

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse repellendus labore nemo ex sint, cumque est exercitationem doloribus explicabo? Ullam,',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse repellendus labore nemo ex sint, cumque est exercitationem doloribus explicabo? Ullam, nemo inventore optio, ratione repudiandae porro, maiores vel excepturi dolores hic praesentium accusantium rem nihil. Repudiandae nisi iure sunt ducimus totam nemo. Quisquam, similique? Aliquam totam suscipit fugit a dolore maxime reiciendis, eius asperiores voluptates iusto laborum ipsum soluta voluptatem perferendis autem repellat quaerat sed beatae quisquam. Reiciendis perferendis fugit iusto asperiores! Neque dolores, temporibus praesentium eius, rerum possimus tempora, excepturi tempore accusantium harum odit laboriosam amet nisi iusto distinctio. Quo cumque sequi esse alias dolore, et, cum aliquid, quia eum sunt tempora itaque mollitia perferendis iure consequatur velit quasi eligendi! Necessitatibus natus iure placeat delectus quam esse velit ut! In modi tempora quas, ratione ipsum porro nulla consectetur reprehenderit nisi fuga omnis ex cumque mollitia quis deserunt doloribus aut hic, architecto necessitatibus distinctio accusamus aliquid possimus officia. Odio, earum!',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Dua',
            'slug' => 'judul-ke-dua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse repellendus labore nemo ex sint, cumque est exercitationem doloribus explicabo? Ullam,',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse repellendus labore nemo ex sint, cumque est exercitationem doloribus explicabo? Ullam, nemo inventore optio, ratione repudiandae porro, maiores vel excepturi dolores hic praesentium accusantium rem nihil. Repudiandae nisi iure sunt ducimus totam nemo. Quisquam, similique? Aliquam totam suscipit fugit a dolore maxime reiciendis, eius asperiores voluptates iusto laborum ipsum soluta voluptatem perferendis autem repellat quaerat sed beatae quisquam. Reiciendis perferendis fugit iusto asperiores! Neque dolores, temporibus praesentium eius, rerum possimus tempora, excepturi tempore accusantium harum odit laboriosam amet nisi iusto distinctio. Quo cumque sequi esse alias dolore, et, cum aliquid, quia eum sunt tempora itaque mollitia perferendis iure consequatur velit quasi eligendi! Necessitatibus natus iure placeat delectus quam esse velit ut! In modi tempora quas, ratione ipsum porro nulla consectetur reprehenderit nisi fuga omnis ex cumque mollitia quis deserunt doloribus aut hic, architecto necessitatibus distinctio accusamus aliquid possimus officia. Odio, earum!',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Tiga',
            'slug' => 'judul-ke-tiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse repellendus labore nemo ex sint, cumque est exercitationem doloribus explicabo? Ullam,',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse repellendus labore nemo ex sint, cumque est exercitationem doloribus explicabo? Ullam, nemo inventore optio, ratione repudiandae porro, maiores vel excepturi dolores hic praesentium accusantium rem nihil. Repudiandae nisi iure sunt ducimus totam nemo. Quisquam, similique? Aliquam totam suscipit fugit a dolore maxime reiciendis, eius asperiores voluptates iusto laborum ipsum soluta voluptatem perferendis autem repellat quaerat sed beatae quisquam. Reiciendis perferendis fugit iusto asperiores! Neque dolores, temporibus praesentium eius, rerum possimus tempora, excepturi tempore accusantium harum odit laboriosam amet nisi iusto distinctio. Quo cumque sequi esse alias dolore, et, cum aliquid, quia eum sunt tempora itaque mollitia perferendis iure consequatur velit quasi eligendi! Necessitatibus natus iure placeat delectus quam esse velit ut! In modi tempora quas, ratione ipsum porro nulla consectetur reprehenderit nisi fuga omnis ex cumque mollitia quis deserunt doloribus aut hic, architecto necessitatibus distinctio accusamus aliquid possimus officia. Odio, earum!',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Empat',
            'slug' => 'judul-ke-empat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse repellendus labore nemo ex sint, cumque est exercitationem doloribus explicabo? Ullam,',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse repellendus labore nemo ex sint, cumque est exercitationem doloribus explicabo? Ullam, nemo inventore optio, ratione repudiandae porro, maiores vel excepturi dolores hic praesentium accusantium rem nihil. Repudiandae nisi iure sunt ducimus totam nemo. Quisquam, similique? Aliquam totam suscipit fugit a dolore maxime reiciendis, eius asperiores voluptates iusto laborum ipsum soluta voluptatem perferendis autem repellat quaerat sed beatae quisquam. Reiciendis perferendis fugit iusto asperiores! Neque dolores, temporibus praesentium eius, rerum possimus tempora, excepturi tempore accusantium harum odit laboriosam amet nisi iusto distinctio. Quo cumque sequi esse alias dolore, et, cum aliquid, quia eum sunt tempora itaque mollitia perferendis iure consequatur velit quasi eligendi! Necessitatibus natus iure placeat delectus quam esse velit ut! In modi tempora quas, ratione ipsum porro nulla consectetur reprehenderit nisi fuga omnis ex cumque mollitia quis deserunt doloribus aut hic, architecto necessitatibus distinctio accusamus aliquid possimus officia. Odio, earum!',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}
