<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Productos;
use App\Models\Modelos;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $productos = \App\Models\Productos::factory(10)->create();
        $todosLosModelos = \App\Models\Modelos::factory(20)->create();
        foreach ($productos as $producto) {
            $modelosParaAsignar = $todosLosModelos->random(rand(1, 3));
            $producto->modelos()->attach($modelosParaAsignar);
        }
    }
}
