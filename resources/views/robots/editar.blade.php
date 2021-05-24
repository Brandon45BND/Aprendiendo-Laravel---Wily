@extends('layouts.plantilla')

@section('title', 'robots editar')

@section('content')
<h1><center>Editar datos del Robot Master</center></h1>

<form action="{{route('robots.update', $robot)}}" method="POST">

    @csrf

    @method('put')

    <div class="global-container">
        <div class="card login-form">
          <div class="card-body">
            <div class="card-text">
                <div class="form-group">
    <label for="exampleFormControlInput1" class="form-label">
        Nombre del Robot Master:
        <br>
        <input type="text" name="nombre" value="{{old('nombre', $robot->nombre)}}">
    </label>
</div>

    @error('nombre')
    <small>{{$message}}</small>
@enderror

    <br>
    <div class="form-group">
    <label for="exampleFormControlInput1" class="form-label">
        Descripcion del Robot Master:
        <textarea name="descripcion" rows="5">{{old('descripcion', $robot->descripcion)}}</textarea>
    </label>
    </div>

    @error('descripcion')
    <small>{{$message}}</small>
    <br>
@enderror

    <label>
        Tipo:
        <br>
        <select name="tipo" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
            <option selected value="Fuego">Fuego</option>
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

    <label>
        Juego:
        <br>
        <select name="juego_id" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
            <option selected value="1">Megaman 1</option>
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

    <br>
    <button type="submit" class="btn btn-outline-primary">Guardar cambios</button>
</div>
</div>
</div>
</div>
</form>

<center><form action="{{route('robots.index')}}">
    <button type="link" class="btn btn-outline-primary">Volver a la lista</button>
</form></center>
<center><form action="{{route('robots.show', $robot)}}">
    <button type="link" class="btn btn-outline-primary">Volver a los datos iniciales</button>
</form></center>
<br>
@endsection
