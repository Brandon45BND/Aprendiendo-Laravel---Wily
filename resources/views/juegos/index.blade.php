@extends('layouts.plantilla')

@section('title', 'lista de juegos')

@section('content')
<h1><center>Lista de los juegos de Megaman registrados</center></h1>
<br>
<br>
<ul>
    <div class="px-3 px-lg-4 px-xl-5 pt-3">
        <div class="card-columns">
    @foreach ($juegos as $juego)
        <!--<div class="card-group">-->
            <div class="card" style="width: 18rem;">
                <img src="{{ url($juego->img_stock) }}" class="card-img-top" width="210" height="270" alt="Juego">
                <div class="card-body">
                  <h5 class="card-title">{{$juego->nombre}} </h5>
                  <br>
                  <a href="{{route('juegos.show', $juego)}}" class="btn btn-primary">Consultar juego</a>
                </div>
              </div>
        <!--</div>-->
    @endforeach
        </div>
    </div>
</ul>

{{$juegos->links()}}

<br>
<form action="{{route('robots.index')}}">
    <button type="link" class="btn btn-outline-primary">Volver a lista de robots</button>
</form>
<br>

@endsection
