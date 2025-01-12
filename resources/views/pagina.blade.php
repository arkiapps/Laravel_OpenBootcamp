@php
$myName = "Melo Mathew";
$lecciones = [
    "Introduccion",
    "Directorios",
    "Novedades",
    "Composer",
    "Variables",
    "Parametros",
    "..."
]

@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}" type="text/css">
</head>
<body>
    <h1>Pagina numero uno</h1>
    <p>Primer ejercicio del curso laravel de openbootcamp, con laravel 10</p>
    <p>MI nombre es {{$myName}} y estoy contento de avanzar en mis estudios con este curso de laravel</p>
    <h4>Que hemos visto?</h4>
    <ul>
        @foreach ($lecciones as $l)
        <li> {{$l}} </li>
        @endforeach
    </ul>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
