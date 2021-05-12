<?php

namespace Database\Factories;

use App\Models\Robot;
use Illuminate\Database\Eloquent\Factories\Factory;

class RobotFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Robot::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'descripcion' => $this->faker->paragraph(),
            'tipo' => $this->faker->sentence()
        ];
    }
}
