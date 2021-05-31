@extends('layouts.plantilla')

@section('title', '' . $robot->nombre)

@section('content')
<h1>Robot Master {{$robot->nombre}}</h1>
<br>
<div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="{{url($robot->imagen)}}" width="210" height="270" alt="Robot">
          </div>
          <div class="col-md-8">
              <div class="card-body">
                  <h5 class="card-title">{{$robot->nombre}}</h5>
                  <b><p class="card-text">Tipo:</b> {{$robot->tipo}}</p>
                  <b><p class="card-text">Juego al que pertenece: </b> {{$robot->juego->nombre}}</p>
                  <p class="card-text">Descripcion: {{$robot->descripcion}}</p>
                </div>
          </div>
        </div>
    </div>
<form action="{{route('robots.edit', $robot)}}">
    <button type="link" class="btn btn-outline-primary">Editar datos</button>
</form>


<form action="{{route('robots.index')}}">
    <button type="link" class="btn btn-outline-primary">Volver a lista</button>
</form>


<form action="{{route('robots.destroy', $robot)}}" method="POST">
    @csrf

    @method('delete')
    
    <button type="link" class="btn btn-outline-primary">Borrar registro</button>
</form>
<br>
@endsection
