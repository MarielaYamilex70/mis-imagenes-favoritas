<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

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

        $users = [
            ['name' => 'Mariela', 
            'email' => 'mariela@gmail.com', 
            'email_verified_at' => now(),
            'password' => '$2y$10$PlTCKmVVc//pp.ZrEsFqKu0kV6QuM/fH5mRfNj4a2QeyzV28Jdmv2', // password
            'remember_token' => Str::random(10)], // id: 1

            ['name' => 'Jorge',
            'email' => 'jorge@gmail.com', 
            'email_verified_at' => now(),
            'password' => '$2y$10$Kyp7PqwQueMaNrQ8.90xPujF37vO3e2L9/JG/BRPQvOtp2LM0nTN6', // password
            'remember_token' => Str::random(10)] // id: 2
            
        ];
        
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
