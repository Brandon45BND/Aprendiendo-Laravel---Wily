<?php

namespace Database\Seeders;

use App\Models\Juego;
use Illuminate\Database\Seeder;
use App\Models\Robot;
use Carbon\Factory;

class RobotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $game = Juego::factory()
            ->count(11)
            ->has(Robot::factory(), "robots")
            ->create();

        /*Robot::factory()
        ->count(1)
        ->for(Juego::factory(), "juego")   
        ->state(
            ['nombre' => 'Metal Man'],
            ['slug' => 'metal-man'],
            ['descripcion' => 'Un robot master de metal'],
            ['tipo' => 'Acero'],
            ['juego_id' => '2'],
        )
        ->create();
        $game = new Juego();

        $game->nombre = "Megaman 1";

        $game->save();

        $game2 = new Juego();

        $game2->nombre = "Megaman 2";

        $game2->save();

        $game3 = new Juego();

        $game3->nombre = "Megaman 3";

        $game3->save();

        $game4 = new Juego();

        $game4->nombre = "Megaman 4";

        $game4->save();

        $game5 = new Juego();

        $game5->nombre = "Megaman 5";

        $game5->save();

        $game6 = new Juego();

        $game6->nombre = "Megaman 6";

        $game6->save();

        $game7 = new Juego();

        $game7->nombre = "Megaman 7";

        $game7->save();

        $game8 = new Juego();

        $game8->nombre = "Megaman 8";

        $game8->save();

        $game9 = new Juego();

        $game9->nombre = "Megaman 9";

        $game9->save();

        $game10 = new Juego();

        $game10->nombre = "Megaman 10";

        $game10->save();

        $game11 = new Juego();

        $game11->nombre = "Megaman 11";

        $game11->save();
        

        $number = new Robot();

        $number->nombre = "Elec Man";
        $number->descripcion = "Un robot master que puede lanzar grandes descargas electricas y rayos";
        $number->tipo = "Electrico";
        $number->slug = "elec-man";
        $number->juego_id = "1";

        $number->save();

        $number2 = new Robot();

        $number2->nombre = "Crash Man";
        $number2->descripcion = "Un robot master que dispara grandes detonadores con formas de taladros desde sus brazos";
        $number2->tipo = "Explosivo";
        $number2->slug = "crash-man";
        $number2->juego_id = "2";

        $number2->save();

        $number3 = new Robot();

        $number3->nombre = "Shadow Man";
        $number3->descripcion = "Un robot master con aspecto de ninja que usa grandes shrikens como armas y tambien tiene habilidades ninja";
        $number3->tipo = "Acero";
        $number3->slug = "shadow-man";
        $number3->juego_id = "3";

        $number3->save();

        $number4 = new Robot();

        $number4->nombre = "Skull Man";
        $number4->descripcion = "Un robot master con aspecto de esqueleto que utiliza craneos destructicos para defenderse y posee un buster";
        $number4->tipo = "Escudo";
        $number4->slug = "skull-man";
        $number4->juego_id = "4";

        $number4->save();

        $number5 = new Robot();

        $number5->nombre = "Wave Man";
        $number5->descripcion = "Un robot master de tipo acuatico que puede invocar grandes olas de agua y tambien tiene un arpon como arma";
        $number5->tipo = "Acuatico";
        $number5->slug = "wave-man";
        $number5->juego_id = "5";

        $number5->save();

        $number6 = new Robot();

        $number6->nombre = "Flame Man";
        $number6->descripcion = "Un robot master originario de la India que puede sacar ondas de fuego desde el suelo";
        $number6->tipo = "Fuego";
        $number6->slug = "flame-man";
        $number6->juego_id = "6";

        $number6->save();

        $number7 = new Robot();

        $number7->nombre = "Shade Man";
        $number7->descripcion = "Un robot master con aspecto de vampiro que puede volar desde las sombras";
        $number7->tipo = "Agil";
        $number7->slug = "shade-man";
        $number7->juego_id = "7";

        $number7->save();

        $number8 = new Robot();

        $number8->nombre = "Tengu Man";
        $number8->descripcion = "Un robot master de cuerpo robusto que tiene una gran capacidad de volar por los cielos y atacar con grandes ventiscas";
        $number8->tipo = "Viento";
        $number8->slug = "tengu-man";
        $number8->juego_id = "8";

        $number8->save();

        $number9 = new Robot();

        $number9->nombre = "Splash Woman";
        $number9->descripcion = "Una robot master con aspecto de sirena que ataca sumergida en el adua tiene la capacidad de cantar y lleva equipada un tridente";
        $number9->tipo = "Acuatico";
        $number9->slug = "splash-woman";
        $number9->juego_id = "9";

        $number9->save();

        $number10 = new Robot();

        $number10->nombre = "Command Man";
        $number10->descripcion = "Un robot master con aspecto de tanque";
        $number10->tipo = "Fuerza";
        $number10->slug = "command-man";
        $number10->juego_id = "10";

        $number10->save();

        $number11 = new Robot();

        $number11->nombre = "Tundra Man";
        $number11->descripcion = "Un robot master de tipo hielo que puede patinar sobre el gelido suelo y atacar con danzas congelantes";
        $number11->tipo = "Hielo";
        $number11->slug = "tundra-man";
        $number11->juego_id = "11";

        $number11->save();

        $number12 = new Robot();

        $number12->nombre = "Gemini Man";
        $number12->descripcion = "Un robot master que puede invocar un clon si mismo y atacar con un laser muy potente";
        $number12->tipo = "Trampa";
        $number12->slug = "gemini-man";
        $number12->juego_id = "3";

        $number12->save();*/
    }
}
