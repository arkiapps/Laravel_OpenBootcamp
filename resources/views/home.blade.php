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
    <h1>Pagina de Inicio</h1>
    <p>Mi pagina de home, con laravel 10</p>
    <a href="/contacto">Contacto</a>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
