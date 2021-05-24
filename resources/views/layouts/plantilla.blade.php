<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!--favicon-->
    <!--estilos-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <link rel="icon" href="{{ url('/css/Icono01.png') }}" sizes="16x16" type="image/png">
       <link rel="stylesheet" href="{{ url('/css/bootstrap.min.css') }}">
       <link rel="stylesheet" href="{{ url('/css/estilos.css') }}">
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
           <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
    <body background="{{ url('/css/Fondo01.jpg') }}">
    <!--header-->
    <!--nav-->

    <header>
        <h1>Base de datos de robots masters del Dr. Wily</h1>
        <nav class="navbar navbar-expand-lg navbar-success bg-light fixed-top">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('robots.index')}}">Lista de robots</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('robots.create')}}">Crear robot</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('juegos.index')}}">Lista de juegos</a>
                    </li>
                    @guest
                    <li class="nav-item"><a class="nav-link" href="{{route('login')}}">Iniciar Sesion</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('register')}}">Registrate</a></li>
                    @else
                    <li class="nav-item"><a class="nav-link" href="#" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Cerrar Sesion</a></li>
                    <li class="nav-item"><a class="nav-link">Usuario: {{ auth()->user()->name }}</a></li>
                    @endguest
                </ul>
              </div>
        </nav>
        <form id="logout-form" method="POST" action="{{ route('logout') }}">
            @csrf
        </form>
    </header>
    
    @yield('content')

    <!--footer-->

    <!--script-->
</body>
</html>