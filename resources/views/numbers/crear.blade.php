@extends('layouts.plantilla')

@section('title', 'numbers crear')

@section('content')
<h1><center>Crea tu propio Robot Master</center></h1>

<form action="{{route('numbers.store')}}" method="POST">

    @csrf

    <label>
        Nombre del Robot Master:
        <br>
        <input type="text" name="nombre" value="{{old('nombre')}}">
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
        <textarea name="descripcion" rows="5">{{old('descripcion')}}</textarea>
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

    @error('tipo')
    <br>
    <small>{{$message}}</small>
    <br>
@enderror

    <br><br>
    <button type="submit">Crear</button>
    <br><br>
</form>

<a href="{{route('numbers.listar')}}">Volver a la lista</a>
@endsection
