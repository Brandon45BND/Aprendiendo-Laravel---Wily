@extends('layouts.plantilla')

@section('title', 'numbers borrar')

@section('content')
<h1><center>Usted a destruido al Robot Master de la base de datos</center></h1>
<br>
<form action="{{route('numbers.listar')}}">
    <center><button>Volver a lista</button></center>
</form>
<br><br>
@endsection
