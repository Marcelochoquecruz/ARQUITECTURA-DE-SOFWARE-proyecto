<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Grado;

class GradoSeeder extends Seeder
{
    public function run(): void
    {
        $grados = [
            ['nombre_curso' => 'Primero A', 'otro1' => 'Valor1', 'otro2' => 'Valor2', 'otro3' => 'Valor3'],
            ['nombre_curso' => 'Primero B', 'otro1' => 'Valor1', 'otro2' => 'Valor2', 'otro3' => 'Valor3'],
            ['nombre_curso' => 'Segundo A', 'otro1' => 'Valor1', 'otro2' => 'Valor2', 'otro3' => 'Valor3'],
            ['nombre_curso' => 'Segundo B', 'otro1' => 'Valor1', 'otro2' => 'Valor2', 'otro3' => 'Valor3'],
            ['nombre_curso' => 'Tercero A', 'otro1' => 'Valor1', 'otro2' => 'Valor2', 'otro3' => 'Valor3'],
            ['nombre_curso' => 'Tercero B', 'otro1' => 'Valor1', 'otro2' => 'Valor2', 'otro3' => 'Valor3'],
        ];

        foreach ($grados as $grado) {
            Grado::create($grado);
        }
    }
}
