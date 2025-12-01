<?php

namespace Database\Factories;

use App\Models\Productos;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Productos>
 */
class ProductosFactory extends Factory
{
    protected $model = Productos::class;
    public function definition(): array
    {
        return [
            'Nombre' => $this->faker->randomElement(['Monitor', 'Tarjeta Gráfica', 'Procesador', 'Laptop', 'Monitor', 'Teclado', 'Mause']),
        ];
    }
}
