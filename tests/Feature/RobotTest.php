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
    /** @test */
    public function a_post_can_be_created(){

        $this->withoutExceptionHandling();

        $robot = Robot::factory(1)->create();
        $this->actingAs($robot);

        $this->post(route('numbers.store'), ['body' => 'primer robot']);

        $this->assertDatabaseHas('robots', [
            'body' => 'primer robot'
        ]);

        

    }
}
