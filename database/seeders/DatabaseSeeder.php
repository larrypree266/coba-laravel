<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        // Manual Method
        User::create([
            'name' => 'Reza Arya',
            'email' => 'rezaarya511@gmail.com',
            'password' => bcrypt('12345'),
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::create([
            'title' => 'Judul Ke satu',
            'slug' => 'judul-ke-satu',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur ratione eos adipisci facilis quisquam blanditiis omnis aperiam distinctio cupiditate minima!',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur ratione eos adipisci facilis quisquam blanditiis omnis aperiam distinctio cupiditate minima!</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis iure eius, distinctio recusandae, quam sedaccusantium labore impedit minus commodi alias, perspiciatis debitis cumque? Nihil sapiente aperiam sit mollitiaeaque.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur ullam a quam veritatis atque harum reprehenderit ipsa quisquam molestias? Voluptatibus saepe ex aliquid id praesentium nemo voluptatem quibusdam recusandae assumenda quasi quisquam, eius et molestias commodi dolor asperiores accusamus rerum quis earum porro voluptates perspiciatis aliquam? Impedit, necessitatibus sapiente.</p>',
            'category_id' => 1,
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Judul Ke Dua',
            'slug' => 'judul-ke-dua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur ratione eos adipisci facilis quisquam blanditiis omnis aperiam distinctio cupiditate minima!',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur ratione eos adipisci facilis quisquam blanditiis omnis aperiam distinctio cupiditate minima!</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis iure eius, distinctio recusandae, quam sedaccusantium labore impedit minus commodi alias, perspiciatis debitis cumque? Nihil sapiente aperiam sit mollitiaeaque.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur ullam a quam veritatis atque harum reprehenderit ipsa quisquam molestias? Voluptatibus saepe ex aliquid id praesentium nemo voluptatem quibusdam recusandae assumenda quasi quisquam, eius et molestias commodi dolor asperiores accusamus rerum quis earum porro voluptates perspiciatis aliquam? Impedit, necessitatibus sapiente.</p>',
            'category_id' => 1,
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Judul Ke Tiga',
            'slug' => 'judul-ke-tiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur ratione eos adipisci facilis quisquam blanditiis omnis aperiam distinctio cupiditate minima!',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur ratione eos adipisci facilis quisquam blanditiis omnis aperiam distinctio cupiditate minima!</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis iure eius, distinctio recusandae, quam sedaccusantium labore impedit minus commodi alias, perspiciatis debitis cumque? Nihil sapiente aperiam sit mollitiaeaque.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur ullam a quam veritatis atque harum reprehenderit ipsa quisquam molestias? Voluptatibus saepe ex aliquid id praesentium nemo voluptatem quibusdam recusandae assumenda quasi quisquam, eius et molestias commodi dolor asperiores accusamus rerum quis earum porro voluptates perspiciatis aliquam? Impedit, necessitatibus sapiente.</p>',
            'category_id' => 2,
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Judul Ke Empat',
            'slug' => 'judul-ke-empat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur ratione eos adipisci facilis quisquam blanditiis omnis aperiam distinctio cupiditate minima!',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur ratione eos adipisci facilis quisquam blanditiis omnis aperiam distinctio cupiditate minima!</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis iure eius, distinctio recusandae, quam sedaccusantium labore impedit minus commodi alias, perspiciatis debitis cumque? Nihil sapiente aperiam sit mollitiaeaque.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur ullam a quam veritatis atque harum reprehenderit ipsa quisquam molestias? Voluptatibus saepe ex aliquid id praesentium nemo voluptatem quibusdam recusandae assumenda quasi quisquam, eius et molestias commodi dolor asperiores accusamus rerum quis earum porro voluptates perspiciatis aliquam? Impedit, necessitatibus sapiente.</p>',
            'category_id' => 2,
            'user_id' => 1,
        ]);
    }
}
