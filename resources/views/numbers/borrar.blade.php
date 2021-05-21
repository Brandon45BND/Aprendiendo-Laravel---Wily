@extends('layouts.plantilla')

@section('title', 'numbers borrar')

@section('content')
<h1><center>Usted a destruido al Robot Master de la base de datos</center></h1>
<br>
<form action="{{route('numbers.index')}}">
    <center><button type="link" class="btn btn-outline-primary">Volver a lista</button></center>
</form>
<br><br>
@endsection
