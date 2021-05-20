@extends('layouts.plantilla')

@section('title', '' . $game->nombre)

@section('content')
<h1>Juego: {{$game->nombre}}</h1>
<br>
<h2>Lista de robots masters que pertenecen a este juego: </h2>
<br>
<ul>
    @foreach ($robots as $number)
    <li>
        <a href="{{route('numbers.show', $number)}}">{{$number->nombre}}</a>
    </li>
    @endforeach
</ul>

{{$robots->links()}}
<br><br>
<form action="{{route('games.index')}}">
    <button>Volver a lista</button>
</form>
@endsection
