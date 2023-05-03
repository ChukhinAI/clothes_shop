<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
//use Database\Factories\AdminUser;
use Illuminate\Database\Seeder;
//use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\User::factory(10)->create();

        \App\Models\Post::factory(10)->create();

        \App\Models\AdminUser::factory(1)->create([
            "name" => "Admin",
            "email" => "laravel@laravel.com",
            "password" => bcrypt("12345"), // пароль будет храниться в виде хеша
        ]);

        \App\Models\Category::factory(5)->create();

        \App\Models\Brand::factory(5)->create();

        \App\Models\Product::factory(5)->create();


    }
}
