@extends('layouts.plantilla')

@section('title', '' . $number->nombre)

@section('content')
<h1>Robot Master {{$number->nombre}}</h1>
<br>
<div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="{{ url('/css/RobotEx.jpg') }}" width="210" height="270" alt="Robot">
          </div>
          <div class="col-md-8">
              <div class="card-body">
                  <h5 class="card-title">{{$number->nombre}}</h5>
                  <b><p class="card-text">Tipo:</b> {{$number->tipo}}</p>
                  <b><p class="card-text">Juego al que pertenece: </b> {{$number->juego->nombre}}</p>
                  <p class="card-text">Descripcion: {{$number->descripcion}}</p>
                </div>
          </div>
        </div>
    </div>
<form action="{{route('numbers.edit', $number)}}">
    <button type="link" class="btn btn-outline-primary">Editar datos</button>
</form>


<form action="{{route('numbers.index')}}">
    <button type="link" class="btn btn-outline-primary">Volver a lista</button>
</form>


<form action="{{route('numbers.destroy', $number)}}" method="POST">
    @csrf

    @method('delete')
    
    <button type="link" class="btn btn-outline-primary">Borrar registro</button>
</form>
<br>
@endsection
