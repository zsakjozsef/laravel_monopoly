<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tablefields;

class TablefieldsSeeder extends Seeder
{
    public function run(): void
    {
        Tablefields::create([
            'number' => '0',
            'color' => '@',
            'title' => 'START',
            'price' => '@',
            'description' => '@',
            'image' => '@',
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);
        Tablefields::create([
            'number' => '1',
            'color' => '@',
            'title' => 'Piac Tér',
            'price' => '1000',
            'description' => '***',
            'image' => '@',
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);
        Tablefields::create([
            'number' => '2',
            'color' => '@',
            'title' => 'MEGLEPETÉS',
            'price' => '@',
            'description' => '***',
            'image' => '@',
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        

    }
}
