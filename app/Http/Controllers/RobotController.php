<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Robot;
use App\Http\Requests\ValRobot;
use Illuminate\Support\Str;
use App\Events\CreateRobot;
use App\Events\UserHasContacted;
use Illuminate\Support\Facades\Storage;

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

        $dato1 = $robot->nombre = $request->nombre;
        $dato2 = $robot->descripcion = $request->descripcion;
        $dato3 = $robot->tipo = $request->tipo;

        $dato4 = $robot->slug = Str::slug($request->nombre, '-');
        $dato5 = $robot->imagen = $request->file('imagen')->store('public/imagenes');

        $dato6 = $robot->juego_id = $request->juego_id;

        $url = Storage::url($dato5);

        $robot = Robot::create([
            'nombre' => $dato1,
            'descripcion' => $dato2,
            'tipo' => $dato3,
            'slug' => $dato4,
            'imagen' =>$url,
            'juego_id' => $dato6
        ]);

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
