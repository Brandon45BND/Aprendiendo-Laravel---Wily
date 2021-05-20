<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Juego;
use App\Models\Robot;

class GameController extends Controller
{
    public function index()
    {
        $juegos = Juego::orderBy('id', 'asc')->paginate();

        return view('games.index', compact('juegos'));
    }

    public function show(Juego $game)
    {
        $robots = Robot::where('juego_id', $game->id)->orderBy('id', 'desc')->paginate();

        return view('games.show', compact('game', 'robots'));
    }
}
