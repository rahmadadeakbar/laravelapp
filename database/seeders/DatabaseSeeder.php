<?php

namespace Database\Seeders;

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

        // tabel user
        User::create([
            'name' => 'Rahmad Ade Akbar',
            'email' => 'rahmadadeakbar@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Munawar',
            'email' => 'muunawar@gmail.com',
            'password' => bcrypt('12345')
        ]);


        // tabel category

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'category_id' => 1,
            'user_id' => 1,
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed quos dolore asperiores laboriosam distinctio architecto magni natus sapiente, possimus numquam! Maxime adipisci in magni quas, ipsam quae mollitia veniam provident.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore quam unde nisi ipsum consequatur! Excepturi officia aperiam impedit! Consequuntur, neque exercitationem blanditiis accusamus praesentium quae porro soluta delectus doloribus? Quasi perspiciatis soluta rem atque obcaecati est blanditiis deserunt, cupiditate consequuntur laboriosam aut, vero dolores architecto eos maiores, earum adipisci cumque quod! Atque fugit veritatis earum, odit cumque nisi! Porro ipsum voluptatibus optio dicta error, maxime beatae nemo mollitia, eligendi est, explicabo iste iusto repellendus quidem dolorem.</p><p>Ducimus qui corrupti unde quaerat minima iste aut voluptate beatae aperiam vitae impedit tempora sunt, et minus facilis nihil commodi quo ad facere repudiandae. Rem quod minima, ducimus consectetur perspiciatis nemo? Optio amet reiciendis, iusto temporibus dignissimos vitae debitis commodi inventore eum ipsam voluptates!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla similique, beatae et provident vitae, inventore voluptatibus soluta explicabo consequatur ducimus assumenda, fuga expedita? Tenetur, et quidem vel adipisci optio eos.</p>'
        ]);

        Post::create([
            'title' => 'Judul Ke Dua',
            'category_id' => 1,
            'user_id' => 2,
            'slug' => 'judul-ke-dua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed quos dolore asperiores laboriosam distinctio architecto magni natus sapiente, possimus numquam! Maxime adipisci in magni quas, ipsam quae mollitia veniam provident.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore quam unde nisi ipsum consequatur! Excepturi officia aperiam impedit! Consequuntur, neque exercitationem blanditiis accusamus praesentium quae porro soluta delectus doloribus? Quasi perspiciatis soluta rem atque obcaecati est blanditiis deserunt, cupiditate consequuntur laboriosam aut, vero dolores architecto eos maiores, earum adipisci cumque quod! Atque fugit veritatis earum, odit cumque nisi! Porro ipsum voluptatibus optio dicta error, maxime beatae nemo mollitia, eligendi est, explicabo iste iusto repellendus quidem dolorem.</p><p>Ducimus qui corrupti unde quaerat minima iste aut voluptate beatae aperiam vitae impedit tempora sunt, et minus facilis nihil commodi quo ad facere repudiandae. Rem quod minima, ducimus consectetur perspiciatis nemo? Optio amet reiciendis, iusto temporibus dignissimos vitae debitis commodi inventore eum ipsam voluptates!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla similique, beatae et provident vitae, inventore voluptatibus soluta explicabo consequatur ducimus assumenda, fuga expedita? Tenetur, et quidem vel adipisci optio eos.</p>'
        ]);

        Post::create([
            'title' => 'Judul Ke Tiga',
            'category_id' => 2,
            'user_id' => 1,
            'slug' => 'judul-ke-tiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed quos dolore asperiores laboriosam distinctio architecto magni natus sapiente, possimus numquam! Maxime adipisci in magni quas, ipsam quae mollitia veniam provident.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore quam unde nisi ipsum consequatur! Excepturi officia aperiam impedit! Consequuntur, neque exercitationem blanditiis accusamus praesentium quae porro soluta delectus doloribus? Quasi perspiciatis soluta rem atque obcaecati est blanditiis deserunt, cupiditate consequuntur laboriosam aut, vero dolores architecto eos maiores, earum adipisci cumque quod! Atque fugit veritatis earum, odit cumque nisi! Porro ipsum voluptatibus optio dicta error, maxime beatae nemo mollitia, eligendi est, explicabo iste iusto repellendus quidem dolorem.</p><p>Ducimus qui corrupti unde quaerat minima iste aut voluptate beatae aperiam vitae impedit tempora sunt, et minus facilis nihil commodi quo ad facere repudiandae. Rem quod minima, ducimus consectetur perspiciatis nemo? Optio amet reiciendis, iusto temporibus dignissimos vitae debitis commodi inventore eum ipsam voluptates!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla similique, beatae et provident vitae, inventore voluptatibus soluta explicabo consequatur ducimus assumenda, fuga expedita? Tenetur, et quidem vel adipisci optio eos.</p>'
        ]);

        Post::create([
            'title' => 'Judul Ke Empat',
            'category_id' => 1,
            'user_id' => 1,
            'slug' => 'judul-ke-empat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed quos dolore asperiores laboriosam distinctio architecto magni natus sapiente, possimus numquam! Maxime adipisci in magni quas, ipsam quae mollitia veniam provident.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore quam unde nisi ipsum consequatur! Excepturi officia aperiam impedit! Consequuntur, neque exercitationem blanditiis accusamus praesentium quae porro soluta delectus doloribus? Quasi perspiciatis soluta rem atque obcaecati est blanditiis deserunt, cupiditate consequuntur laboriosam aut, vero dolores architecto eos maiores, earum adipisci cumque quod! Atque fugit veritatis earum, odit cumque nisi! Porro ipsum voluptatibus optio dicta error, maxime beatae nemo mollitia, eligendi est, explicabo iste iusto repellendus quidem dolorem.</p><p>Ducimus qui corrupti unde quaerat minima iste aut voluptate beatae aperiam vitae impedit tempora sunt, et minus facilis nihil commodi quo ad facere repudiandae. Rem quod minima, ducimus consectetur perspiciatis nemo? Optio amet reiciendis, iusto temporibus dignissimos vitae debitis commodi inventore eum ipsam voluptates!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla similique, beatae et provident vitae, inventore voluptatibus soluta explicabo consequatur ducimus assumenda, fuga expedita? Tenetur, et quidem vel adipisci optio eos.</p>'
        ]);
    }
}
