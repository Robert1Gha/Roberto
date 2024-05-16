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
    <h1 id="ta">Registrar automovil</h1>
    <a href="/Carro" class="mar">Carros</a>
		<br>
		<p class="titulo"><b>Storecar</b></p>
		<a href="/Marca/Create" class="remar">Registrar marca</a>
        <form action="/Carro" method="POST" id="formulario">
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
                <input type="text" name="Marca" id="Marca" placeholder="Marca"/>
            </div>
            <div class="">
                <input type="number" name="Modelo" id="Modelo" placeholder="Modelo"/>
            </div>
            <div class="">
                <input type="number" name="Numero_serie" id="Numero_serie" placeholder="Numero de serie"/>
            </div>
            <input type="submit" class="env" name="action" value="Enviar"/>
            <div class= "container">
  <div class="select">
    <select name="marcas[]" multiple>
    <option value="" disabled selected>Selecciona una marca</option>
                    @foreach($marcas as $marca)
                    <option value="{{$marca->id}}">{{$marca->Nombre_marca}}</option>
                    @endforeach
    </select>
  </div>
</div> 
            
        </form>
    </body>

</html>