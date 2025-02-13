<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create([
            'name' => 'Raafi Nur Adzani',
            'username' => 'raafi',
            'email' => 'raafinakkeren16@gmail.com',
            'password' => Hash::make('12345')
        ]);
    }
}
