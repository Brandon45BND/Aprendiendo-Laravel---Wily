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
    public function a_post_can_be_created()
    {
        /**
         * Lee denuevo la documentación sobre tests en Laravel
         *
         * Por qué estas intentando iniciar sesión con un Robot
         * a Laravel??
         *
         * Tu factory robot está mal
         * La ruta a las que haces post está mal
         * La información que mandas en el post está mal
         * La información que compruebas existe en la BD está mal
         *
         * Revisa este articulo:
         * https://jasonmccreary.me/articles/start-testing-laravel/#writing-the-first-test
         * 
         * Y esto:
         * https://www.youtube.com/playlist?list=PL0m0TPnF-iCH4pgyh1UsGR6roddKVNwn2
         */
        $this->withoutExceptionHandling();

        $robot = Robot::factory(1)->create();
        $this->actingAs($robot);

        $this->post(route('numbers.store'), ['body' => 'primer robot']);

        $this->assertDatabaseHas('robots', [
            'body' => 'primer robot'
        ]);
    }
}
