<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Tips and Trick',
                'slug' => 'tips-and-trick',
                'color' => 'blue'
            ],
            [
                'name' => 'Information',
                'slug' => 'information',
                'color' => 'red'
            ],
            [
                'name' => 'News',
                'slug' => 'news',
                'color' => 'purple'
            ],
            [
                'name' => 'Review',
                'slug' => 'review',
                'color' => 'green'
            ],
            [
                'name' => 'Hiker Story',
                'slug' => 'hiker-story',
                'color' => 'yellow'
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
