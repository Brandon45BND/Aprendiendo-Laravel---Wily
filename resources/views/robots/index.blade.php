@extends('layouts.plantilla')

@section('title', 'robots lista de robots')

@section('content')
<h1><center>Lista de los Robot Masters registrados</center></h1>
<br>
<ul>
    <div class="px-3 px-lg-4 px-xl-5 pt-3">
        <div class="card-columns">
    @foreach ($robots as $robot)
    <!--<div class="card-group">-->
        <div class="card" style="width: 18rem;">
            <img src="{{url($robot->imagen)}}" class="card-img-top" width="210" height="270" alt="Robot">
            <div class="card-body">
              <h5 class="card-title">{{$robot->nombre}} </h5>
              <b><p class="card-text">Tipo:</b> {{$robot->tipo}}</p>
              <b><p class="card-text">Juego:</b> {{$robot->juego->nombre}}</p>
              <p class="card-text">{{$robot->descripcion}}</p>
              <a href="{{route('robots.show', $robot)}}" class="btn btn-primary">Acceder a datos</a>
            </div>
          </div>
    <!--</div>-->
    @endforeach
        </div>
    </div>
</ul>
<form action="{{route('robots.create')}}">
    <button type="link" class="btn btn-outline-primary">Crear robot</button>
</form>
<form action="{{route('juegos.index')}}">
    <button type="link" class="btn btn-outline-primary">Ir a la lista de juegos</button>
</form>
<br>
{{$robots->links()}}


@endsection
