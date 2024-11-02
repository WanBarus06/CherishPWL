<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Article;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Article::factory()->create([
            [
            'article_id' => 1,
            'image' => '../images/9289817-removebg-preview.png',
            'title' => 'First Article',
            'excerpt' => 'this is my first excerpt',
            'body' => 'this is my first body',
            'slug' => 'first-article',
            ],
            [
            'article_id' => 2,
            'image' => '../images/9289817-removebg-preview.png',
            'title' => 'Second Article',
            'excerpt' => 'this is my second excerpt',
            'body' => 'this is my second body',
            'slug' => 'second-article',
            ],
            [
            'article_id' => 3,
            'image' => '../images/download.jpeg',
            'title' => 'Third Article',
            'excerpt' => 'this is my third excerpt',
            'body' => 'this is my third body',
            'slug' => 'third-article',
            ], 
            [
            'article_id' => 4,
            'image' => '../images/download.jpeg',
            'title' => 'Fourth Article',
            'excerpt' => 'this is my fourth excerpt',
            'body' => 'this is my fourth body',
            'slug' => 'fourth-article',
            ]

        ]);
    }
}
