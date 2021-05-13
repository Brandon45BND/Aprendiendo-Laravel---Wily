@extends('layouts.plantilla')

@section('title', 'numbers listar')

@section('content')
<h1><center>Lista de los Robot Masters registrados</center></h1>
<br>
<form action="{{route('numbers.index')}}">
    <button>Volver al menu principal</button>
</form>
<br>
<br>
<form action="{{route('numbers.crear')}}">
    <button>Crear robot</button>
</form>
<br>
<ul>
    @foreach ($robots as $number)
    <li>
        <a href="{{route('numbers.mostrar', $number)}}">{{$number->nombre}}</a>
    </li>
    @endforeach
</ul>

{{$robots->links()}}

@endsection
