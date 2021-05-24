<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Robot;
use App\Http\Requests\ValRobot;
use Illuminate\Support\Str;
use App\Events\CreateRobot;
use App\Events\UserHasContacted;

class RobotController extends Controller
{
    /*public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }*/

    public function index()
    {
        $robots = Robot::orderBy('id', 'desc')->paginate();

        return view('robots.index', compact('robots'));
    }

    public function create()
    {
        return view('robots.crear');
    }

    public function store(ValRobot $request)
    {
        $robot = new Robot();

        $robot->nombre = $request->nombre;
        $robot->descripcion = $request->descripcion;
        $robot->tipo = $request->tipo;

        $robot->slug = Str::slug($request->nombre, '-');

        $robot->juego_id = $request->juego_id;

        $robot->save();

        /*$robot = Robot::create($request->all());*/

        UserHasContacted::dispatch($request->email);

        return redirect()->route('robots.show', $robot);
    }

    public function show(Robot $robot)
    {
        return view('robots.mostrar', compact('robot'));
    }

    public function edit(Robot $robot)
    {
        return view('robots.editar', compact('robot'));
    }

    public function update(Request $request, Robot $robot)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'tipo' => 'required'
        ]);
        
        $robot->nombre = $request->nombre;
        $robot->descripcion = $request->descripcion;
        $robot->tipo = $request->tipo;

        $robot->slug = Str::slug($request->nombre, '-');

        $robot->juego_id = $request->juego_id;

        $robot->save();

        /*$number->update($request->all());*/

        return redirect()->route('robots.show', $robot);
    }

    public function destroy(Robot $robot)
    {
        $robot->delete();
        
        return view('robots.borrar');
    }
}
