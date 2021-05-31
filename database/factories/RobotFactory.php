<?php

namespace Database\Factories;

use App\Models\Robot;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Juego;

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
        $nombre = $this->faker->name();
        return [
            'nombre' => $nombre,
            'slug'=> Str::slug($nombre, '-'),
            'descripcion' => $this->faker->paragraph(),
            'tipo' => $this->faker->sentence(),
            'imagen' => $this->faker->sentence(),
            'juego_id' => Juego::factory()
        ];
    }
}
