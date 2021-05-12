<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Robot;

class RobotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Robot::factory(50)->create();
    }
}
