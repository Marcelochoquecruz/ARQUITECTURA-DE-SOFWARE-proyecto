<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Administrador Don Bosco',
            'email' => 'admin@donbosco.edu',
            'password' => Hash::make('DonBosco2024!'), // Contraseña más segura
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Usuario adicional para pruebas (opcional)
        User::create([
            'name' => 'Profesor Demo',
            'email' => 'profesor@donbosco.edu',
            'password' => Hash::make('Profesor2024!'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
