@extends('layouts.plantilla')

@section('title', 'numbers')

@section('content')
<h1><center>Bienvenido a la base de datos de los Robot Masters del Doctor Wily</center></h1>
<br><br>
<form action="{{route('numbers.create')}}">
    <center><button>Crear robot</button></center>
</form>
<br><br>
<form action="{{route('numbers.listar')}}">
    <center><button>Lista de robots</button></center>
</form>
@endsection
