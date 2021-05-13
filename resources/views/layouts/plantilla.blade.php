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
        <h1>Base de datos de robots masters del Dr. Wily</h1>
        <nav>
            <ul>
                <li><a href="{{route('numbers.index')}}" class="{{request()->routeIs('numbers.index') ? 'active' : ''}}">Menu Principal</a></li>
                <li><a href="{{route('numbers.listar')}}" class="{{request()->routeIs('numbers.listar') ? 'active' : ''}}">Lista de robots</a></li>
                <li><a href="{{route('numbers.crear')}}" class="{{request()->routeIs('numbers.crear') ? 'active' : ''}}">Crear robot</a></li>
            </ul>
        </nav>
    </header>
    
    @yield('content')

    <!--footer-->

    <!--script-->
</body>
</html>