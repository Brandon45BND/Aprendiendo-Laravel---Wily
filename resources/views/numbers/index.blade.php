@extends('layouts.plantilla')

@section('title', 'numbers lista de robots')

@section('content')
<h1><center>Lista de los Robot Masters registrados</center></h1>
<br>
<ul>
    <div class="px-3 px-lg-4 px-xl-5 pt-3">
        <div class="card-columns">
    @foreach ($robots as $number)
    <!--<div class="card-group">-->
        <div class="card" style="width: 18rem;">
            <img src="{{ url('/css/RobotEx.jpg') }}" class="card-img-top" width="210" height="270" alt="Robot">
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
<form action="{{route('numbers.create')}}">
    <button type="link" class="btn btn-outline-primary">Crear robot</button>
</form>
<form action="{{route('games.index')}}">
    <button type="link" class="btn btn-outline-primary">Ir a la lista de juegos</button>
</form>
<br>
{{$robots->links()}}


@endsection
