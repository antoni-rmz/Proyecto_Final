<?php

namespace Database\Factories;

use App\Models\Modelos;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Modelos>
 */
class ModelosFactory extends Factory
{
    protected $model = Modelos::class;
    public function definition(): array
    {
        return [
            'Marca' => $this->faker->company(),
            'Modelo' => $this->faker->bothify('Model-###??'),
            'Precio' => $this->faker->randomFloat(2, 50, 2000),
        ];
    }
}
