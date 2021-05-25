<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Http\Request;
use App\Models\Robot;
use App\Http\Requests\ValRobot;
use Illuminate\Support\Str;
use App\Events\UserHasContacted;

class RobotTest extends TestCase
{

    use RefreshDatabase;

    /** @test */
    public function a_post_can_be_created(){

        $robot = Robot::factory()->create([
            'id' => 1,
        ]);

        /* Problema reciente que resolver: Intentar averiguar cual es el error de la linea 27 y solucionarlo */
        $respuesta = $this->post('robots.store');

        $respuesta->assertJsonFragment([
            'id' => 1,
        ]);

    }
}
