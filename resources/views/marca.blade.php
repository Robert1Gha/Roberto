<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        @vite(['resources/css/ccreate.css',])
    </head>
    <body class="antialiased">
    <h1 id="ta">Registrar Marcas</h1>
    <a href="/Marca" class="mar">Marcas</a>
		<br>
		<p class="titulo"><b>Storecar</b></p>
		<a href="/Carro/Create" class="remar">Registrar automovil</a>
        <form action="/Marca" method="POST" id="formulario">
            @csrf
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="">
                <input type="text" name="Nombre_marca" id="Nombre_marca" placeholder="Nombre de marca"/>
            </div>
            <div class="">
                <input type="number" name="Versiones_autos" id="Versiones_autos" placeholder="Versiones de autos de la marca"/>
            </div>
            <input type="submit" name="action" value="enviar"/>
        </form>
    </body>

</html>