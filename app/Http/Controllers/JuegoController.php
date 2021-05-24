<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Juego;
use App\Models\Robot;

class JuegoController extends Controller
{
    public function index()
    {
        $juegos = Juego::orderBy('id', 'asc')->paginate();

        return view('juegos.index', compact('juegos'));
    }

    public function show(Juego $juego)
    {
        $robots = Robot::where('juego_id', $juego->id)->orderBy('id', 'desc')->paginate();

        return view('juegos.show', compact('juego', 'robots'));
    }
}
