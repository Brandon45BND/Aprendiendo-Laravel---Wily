<?php

namespace Database\Factories;

use App\Models\Juego;
use Illuminate\Database\Eloquent\Factories\Factory;

class JuegoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Juego::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
        ];
    }
}
