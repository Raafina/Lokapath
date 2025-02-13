<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Author;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
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

        $this->call([UserSeeder::class, CategorySeeder::class]);

        Post::factory(50)->recycle(
            [
                Category::all(),
                User::all()
            ]

        )->create();
    }
}
