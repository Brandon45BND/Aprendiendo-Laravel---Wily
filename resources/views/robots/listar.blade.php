@extends('layouts.plantilla')

@section('title', 'robots listar')

@section('content')
<h1><center>Lista de los Robot Masters registrados</center></h1>
<br>
<form action="{{route('robots.index')}}">
    <button>Volver al menu principal</button>
</form>
<br>
<br>
<form action="{{route('robots.create')}}">
    <button>Crear robot</button>
</form>
<br>
<ul>
    @foreach ($robots as $robot)
    <li>
        <a href="{{route('numbers.show', $robot)}}">{{$robot->nombre}}</a>
    </li>
    @endforeach
</ul>

{{$robots->links()}}

@endsection
