<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'id' => 1,
            'name' => 'Estéfano',
            'email' => 'estefano@gmail.com',
            'password' => bcrypt('123'),
        ]);
        User::create([
            'id' => 2,
            'name' => 'Camila',
            'email' => 'camila@gmail.com',
            'password' => bcrypt('123'),
        ]);
        User::create([
            'id' => 3,
            'name' => 'Martín',
            'email' => 'martin@gmail.com',
            'password' => bcrypt('123'),
        ]);

    }
}
