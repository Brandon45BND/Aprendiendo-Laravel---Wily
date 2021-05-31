@extends('layouts.plantilla')

@section('title', '' . $juego->nombre)

@section('content')
<div class="card mb-3">
    <img src="{{ url($juego->img_page) }}" class="card-img-top" alt="Videojuego" height="400">
    <div class="card-body">
      <h5 class="card-title">Videojuego: {{$juego->nombre}}</h5>
    </div>
  </div>


<br>
<h2>Lista de robots masters que pertenecen a este juego: </h2>
<br>
<ul>
    <div class="px-3 px-lg-4 px-xl-5 pt-3">
        <div class="card-columns">
    @foreach ($robots as $robot)
    <!--<div class="card-group">-->
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <img src="{{url($robot->imagen)}}" class="card-img-top" width="210" height="270" alt="Robot">
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

{{$robots->links()}}
<br><br>
<form action="{{route('juegos.index')}}">
    <button type="link" class="btn btn-outline-primary">Volver a lista</button>
</form>
<br>
@endsection
