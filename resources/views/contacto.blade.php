<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME')}} | contacto</title>
</head>
<body>
    <h1>Mi pagina de contacto</h1>
    <form action="/contacto" autocomplete="off">
    @csrf
    <div>
        <label for="Nombre">
            <input type="text" name="name" placeholder="Name">
        </label>
    </div>
    <div>
        <label for="Email">
            <input type="text" name="email" placeholder="Email">
        </label>
    </div>
    <div>
        <label for="Phone">
            <input type="text" name="phone" placeholder="Phone">
        </label>
    </div>
    <div>
        <label for="Consulta">
            <textarea name="consulta" id="" cols="30" rows="10" placeholder="Consulta"></textarea>
        </label>
    </div>
    <div>
        <button>Enviar</button>
    </div>
    </form>

</body>
</html>
