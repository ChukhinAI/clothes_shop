<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\AdminUserFactory;
use Illuminate\Database\Seeder;
use App\Models\Post;

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

        Post::factory(10)->create();

        AdminUser::factory(1)->create([
            "name" => "Admin",
            "email" => "laravel@laravel.com",
            "password" => bcrypt("12345"), // пароль будет храниться в виде хеша
        ]);
    }
}