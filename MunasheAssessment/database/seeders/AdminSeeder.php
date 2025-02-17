<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Admin::create([
            'username' => 'Munashe Chaps',
            'email' => 'munachaps@gmail.com',
            'dob' => now(),
            'password' => bcrypt('Munachaps@263'),
        ]);
    }
}
