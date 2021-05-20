@extends('layouts.plantilla')

@section('title', 'numbers editar')

@section('content')
<h1><center>Editar datos del Robot Master</center></h1>

<form action="{{route('numbers.update', $number)}}" method="POST">

    @csrf

    @method('put')

    <label>
        Nombre del Robot Master:
        <br>
        <input type="text" name="nombre" value="{{old('nombre', $number->nombre)}}">
    </label>

    @error('nombre')
    <br>
    <small>{{$message}}</small>
    <br>
@enderror

    <br><br>
    <label>
        Descripcion del Robot Master:
        <br>
        <textarea name="descripcion" rows="5">{{old('descripcion', $number->descripcion)}}</textarea>
    </label>

    @error('descripcion')
    <br>
    <small>{{$message}}</small>
    <br>
@enderror

    <br><br>
    <label>
        Tipo:
        <br>
        <select name="tipo">
            <option value="Fuego">Fuego</option>
            <option value="Hielo">Hielo</option>
            <option value="Electrico">Electrico</option>
            <option value="Viento">Viento</option>
            <option value="Acuatico">Acuatico</option>
            <option value="Acero">Acero</option>
            <option value="Escudo">Escudo</option>
            <option value="Explosivo">Explosivo</option>
            <option value="Fuerza">Fuerza</option>
            <option value="Sustancia">Sustancia</option>
            <option value="Trampa">Trampa</option>
            <option value="Agil">Agil</option>
        </select>
    </label>

    <br><br>
    <label>
        Juego:
        <br>
        <select name="juego_id">
            <option value="1">Megaman 1</option>
            <option value="2">Megaman 2</option>
            <option value="3">Megaman 3</option>
            <option value="4">Megaman 4</option>
            <option value="5">Megaman 5</option>
            <option value="6">Megaman 6</option>
            <option value="7">Megaman 7</option>
            <option value="8">Megaman 8</option>
            <option value="9">Megaman 9</option>
            <option value="10">Megaman 10</option>
            <option value="11">Megaman 11</option>
        </select>
    </label>

    <br><br>
    <button type="submit">Guardar cambios</button>
    <br><br>
</form>

<a href="{{route('numbers.index')}}">Volver a la lista</a>
<br><br>
<a href="{{route('numbers.show', $number)}}">Volver a los datos iniciales</a>
@endsection
