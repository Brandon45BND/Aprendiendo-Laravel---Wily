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
use App\Models\User;
use App\Models\Juego;

class RobotTest extends TestCase
{

    use RefreshDatabase;

    public function test_crear_un_robot()
    {
        $user = User::factory()->create();
        //1- Visitar mi pagina de crear un robot
        $response = $this->actingAs($user)->get(route('robots.create'));
        
        //2- Verificar que la pagina se cargo totalmente
        $response->assertStatus(200);
    }

    public function test_guardar_un_robot()
    {

        $user = User::factory()->create();

        //3- Verificar que podemos guardar un robot

        $juego = Juego::factory()->create();
        
        $robot = $this->actingAs($user)->post(route('robots.store'), [
            'nombre' => 'Metal Man',
            'descripcion' => 'Es un robot master que lanza cierras',
            'tipo' => 'Acero',
            'juego_id' => $juego->id
        ]);

        //4- Verificar que el robot existe en la base de datos
        $this->assertDatabaseHas('robots', [
            'nombre' => 'Metal Man',
            'descripcion' => 'Es un robot master que lanza cierras',
            'tipo' => 'Acero',
            'juego_id' => $juego->id
        ]);

        $response = $this->actingAs($user)->get(route('robots.show', 'metal-man'));

        $response->assertStatus(200);
        
    }

    public function test_paginacion_de_robots_en_index()
    {
        //1- Crear con los factorys datos falsos para la tabla de robots y de juegos para la relacion

        $juegos = Juego::factory()->count(11)->create();

        $robots = Robot::factory()->count(11)->create();

        //2- Verificar que la lista de consulta de robots cargue primero

        $lista = Robot::orderBy('id', 'desc')->paginate();

        //3- Verificar que la pagina de index cargue totalmente

        $response = $this->get(route('robots.index', compact('robots')));

        $response->assertStatus(200);

    }

    public function test_mostrar_un_robot()
    {
        //1- Crear un robot para que podamos consultar sus datos
        
        $robot = Robot::factory()->create();

        //2- Aceeder a la ruta de la consulta de este robot y que cargue totalmente
        $response = $this->get(route('robots.show', compact('robot')));

        $response->assertStatus(200);

        //3- Verificar que los datos del robot carguen en la consulta
    }
}
