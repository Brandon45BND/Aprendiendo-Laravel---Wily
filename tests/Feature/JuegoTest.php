<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Juego;
use App\Models\Robot;

class JuegoTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_paginacion_de_juegos_en_index()
    {
        //1- Crear con los factorys datos falsos para la tabla de juegos

        $juegos = Juego::factory()->count(11)->create();

        //2- Verificar que la lista de consulta de juegos cargue primero

        $lista = Juego::select('nombre')->orderBy('id', 'desc')->get();

        //3- Verificar que la pagina de index cargue totalmente

        $response = $this->get(route('juegos.index'));

        $response->assertStatus(200);

        $response->assertSeeInOrder(['lista']);

    }

    public function test_mostrar_un_juego()
    {
        //1- Crear un juego para que podamos consultar sus datos
        
        $juego = Juego::factory()->create();

        //2- Aceeder a la ruta de la consulta de este robot y que cargue totalmente
        $response = $this->get(route('juegos.show', $juego->id));

        $response->assertStatus(200);

        //3- Verificar que los datos del robot carguen en la consulta

        $response->assertSee($juego->nombre);

    }
}
