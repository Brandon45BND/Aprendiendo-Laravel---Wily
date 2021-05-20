@extends('layouts.plantilla')

@section('title', 'lista de juegos')

@section('content')
<form action="{{route('numbers.index')}}">
    <button>Volver a lista de robots</button>
</form>
<br>
<br>
<ul>
    @foreach ($juegos as $game)
    <li>
        <a href="{{route('games.show', $game)}}">{{$game->nombre}}</a>
    </li>
    @endforeach
</ul>

{{$juegos->links()}}

@auth
{{ auth()->user()->name }}
@endauth

@endsection
