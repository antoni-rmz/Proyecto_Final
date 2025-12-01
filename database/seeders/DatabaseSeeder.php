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
        $productos = Productos::factory(10)->create();
        $modelosALazar = Modelos::factory(20)->create();
            foreach ($productos as $producto) {
                $modelos = $modelos->random(1, 3);
                $producto->modelos()->attach($modelosALazar);
            }
    }
}
