<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body class="antialiased">
        <form action="/Carro" method="POST" id="formulario">
            <div class="">
                <label for="Marca">Marca</label>
                <input type="text" name="Marca" id="Marca"/>
            </div>
            <div class="">
                <label for="Modelo">Modelo</label>
                <input type="number" name="Modelo" id="Modelo"/>
            </div>
            <div class="">
                <label for="Numero_serie">Numero de serie</label>
                <input type="number" name="Numero_serie" id="Numero_serie"/>
            </div>
            <input type="submit" name="action" value="enviar" />
        </form>
    </body>

</html>
