@extends('layouts.plantilla')

@section('title', '' . $number->nombre)

@section('content')
<h1>Robot Master {{$number->nombre}}</h1>
<p><strong>Tipo: </strong>{{$number->tipo}}</p>
<p><strong>Descripcion: </strong>{{$number->descripcion}}</p>
<br>
<form action="{{route('numbers.edit', $number)}}">
    <button>Editar datos</button>
</form>
<br><br>

<form action="{{route('numbers.listar')}}">
    <button>Volver a lista</button>
</form>
<br><br>

<form action="{{route('numbers.destroy', $number)}}" method="POST">
    @csrf

    @method('delete')
    
    <button>Borrar registro</button>
</form>
@endsection
