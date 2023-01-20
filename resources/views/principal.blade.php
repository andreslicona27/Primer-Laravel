<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('titulo')</title>
        <style>
            table{
                border-collapse: collapse;
            }
            table, th, td {
                border: 1px solid black;
            }
            th, td{
                padding: 5px;
            }
        </style>
    </head>
    <body>
        <a href="{{route('inicio')}}">Inicio</a>
        <a href="{{route('formAgregar')}}">Agregar</a>
        @yield('contenido')
        <hr>
        <p>CRUD creado con laravel</p>

    </body>
</html>