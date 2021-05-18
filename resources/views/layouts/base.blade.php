<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!--favicon-->
    <!--estilos-->
    <style>
        .active{
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <!--header-->
    <!--nav-->

    <header>
        <h1>Base de datos de los juegos de Megaman</h1>
        <nav>
            <ul>
                <!--<li><a href="" class="">Menu Principal</a></li>-->
                <li><a href="{{route('numbers.index')}}" class="{{request()->routeIs('numbers.index') ? 'active' : ''}}">Lista de robots</a></li>
                <li><a href="{{route('numbers.create')}}" class="{{request()->routeIs('numbers.create') ? 'active' : ''}}">Crear robot</a></li>
                <li><a href="{{route('games.index')}}" class="{{request()->routeIs('games.index') ? 'active' : ''}}">Lista de juegos</a></li>
            </ul>
        </nav>
    </header>
    
    @yield('content')

    <!--footer-->

    <!--script-->
</body>
</html>