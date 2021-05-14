<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Robot;
use App\Http\Requests\ValRobot;

class WilyController extends Controller
{
    public function index(){
        return view('numbers.index');
    }

    public function create(){
        return view('numbers.crear');
    }

    public function store(ValRobot $request){

       /* $number = new Robot();

        $number->nombre = $request->nombre;
        $number->descripcion = $request->descripcion;
        $number->tipo = $request->tipo;

        $number->save();*/

        $number = Robot::create($request->all());

        return redirect()->route('numbers.show', $number);
    }

    public function listar(){

        $robots = Robot::orderBy('id', 'desc')->paginate();

        return view('numbers.listar', compact('robots'));
    }

    public function borrar(){
        return view('numbers.borrar');
    }

    public function show(Robot $number){

        return view('numbers.mostrar', compact('number'));
    }

    public function edit(Robot $number)
    {
        return view('numbers.editar', compact('number'));

    }

    public function update(Request $request, Robot $number){

        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'tipo' => 'required'
        ]);
        
        /*$number->nombre = $request->nombre;
        $number->descripcion = $request->descripcion;
        $number->tipo = $request->tipo;

        $number->save();*/

        $number->update($request->all());

        return redirect()->route('numbers.show', $number);
    }

    public function destroy(Robot $number){

        $number->delete();
        
        return redirect()->route('numbers.borrar', $number);
    }
}
