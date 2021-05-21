@extends('layouts.plantilla')

@section('title', '' . $game->nombre)

@section('content')
<div class="card mb-3">
    <img src="{{ url('/css/JuegoEx.png') }}" class="card-img-top" alt="Videojuego" height="400">
    <div class="card-body">
      <h5 class="card-title">Videojuego: {{$game->nombre}}</h5>
    </div>
  </div>


<br>
<h2>Lista de robots masters que pertenecen a este juego: </h2>
<br>
<ul>
    <div class="px-3 px-lg-4 px-xl-5 pt-3">
        <div class="card-columns">
    @foreach ($robots as $number)
    <!--<div class="card-group">-->
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">{{$number->nombre}} </h5>
              <b><p class="card-text">Tipo:</b> {{$number->tipo}}</p>
              <b><p class="card-text">Juego:</b> {{$number->juego->nombre}}</p>
              <p class="card-text">{{$number->descripcion}}</p>
              <a href="{{route('numbers.show', $number)}}" class="btn btn-primary">Acceder a datos</a>
            </div>
          </div>
    <!--</div>-->
    @endforeach
        </div>
    </div>
</ul>

{{$robots->links()}}
<br><br>
<form action="{{route('games.index')}}">
    <button type="link" class="btn btn-outline-primary">Volver a lista</button>
</form>
<br>
@endsection
