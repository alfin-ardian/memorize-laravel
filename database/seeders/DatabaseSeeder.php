<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

        Category::create([
            'name' => 'Javascript',
            'slug' => 'javascript'
        ]);

        Category::create([
            'name' => 'PHP',
            'slug' => 'php'
        ]);

        Category::create([
            'name' => 'Laravel',
            'slug' => 'laravel'
        ]);

        Category::create([
            'name' => 'React js',
            'slug' => 'react-js'
        ]);

        Post::factory(10)->create();
    }
}
