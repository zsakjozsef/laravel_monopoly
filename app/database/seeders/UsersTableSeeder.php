<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.hu',
            'email_verified_at' => NULL,
            'password' =>  '$2y$12$xCDEcXmErfVLQ3PqZlUkku4.vMM4P06UebdFevBJgESNVtzktPuv2',
            'remember_token' => NULL,
            'role' => 'admin',
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);
        User::create([
            'name' => 'user',
            'email' => 'user@user.hu',
            'email_verified_at' => NULL,
            'password' =>  '$2y$12$xCDEcXmErfVLQ3PqZlUkku4.vMM4P06UebdFevBJgESNVtzktPuv2',
            'remember_token' => NULL,
            'role' => 'user',
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);
    }
}
