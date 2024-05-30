<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'wander',
            'email' => 'wander@gmail.com',
            'password' => Hash::make('123'),
        ]);

        User::create([
            'name' => 'brau',
            'email' => 'brau@gmail.com',
            'password' => Hash::make('123'),
        ]);
    }
}
