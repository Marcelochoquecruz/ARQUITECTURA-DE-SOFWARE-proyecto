<?php

namespace Database\Seeders;

use App\Models\User; // Asegúrate de usar el modelo de User si usas esa tabla
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => '$2y$12$ql.JtRgoCMAzvxxavAl/nOAgmq22WNJxDh.Kd6HAqC1Uw1iAeXtUS', // La contraseña cifrada
        ]);
    }
}
