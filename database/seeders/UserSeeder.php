<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Raafi Nur Adzani',
            'email' => 'raafinakkeren16@gmail.com',
            'username' => 'raafi',
            'password' => Hash::make('12345')
        ]);
    }
}
