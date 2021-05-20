@extends('layouts.plantilla')

@section('title', 'numbers lista de robots')

@section('content')
<h1><center>Lista de los Robot Masters registrados</center></h1>
<br>
<ul>
    @foreach ($robots as $number)
    <li>
        <a href="{{route('numbers.show', $number)}}">{{$number->nombre}}</a>
    </li>
    @endforeach
</ul>
<form action="{{route('numbers.create')}}">
    <button>Crear robot</button>
</form>
<form action="{{route('games.index')}}">
    <button>Ir a la lista de juegos</button>
</form>
<br>
{{$robots->links()}}

@auth
{{ auth()->user()->name }}
@endauth

@endsection
