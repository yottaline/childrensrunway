<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = \App\Models\User::create([
            'name' => 'Tech.Support',
            'email' => 'support@yottaline.com',
            'password' => Hash::make('Support@Yottaline'),
        ]);
    }
}