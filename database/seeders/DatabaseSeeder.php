<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Author;
use App\Models\Category;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $author_custom1 = Author::create([
            'name' => 'Raafi',
            'username' => 'raafi',
            'email' => 'raafi16@gmail.com',
            'email_verified_at' => now(),
            'password' =>  Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);

        $this->call([CategorySeeder::class]);
        Post::factory(50)->recycle(
            Category::all(),
            Author::factory(5)->create(),
        )->create();
    }
}
