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
    <h1 id="ta">Editar automovil</h1>
    <a href="/Carro" class="mar">Carros</a>
		<br>
		<p class="titulo"><b>Storecar</b></p>
		<a href="/Marca" class="remar">Marcas</a>
        <form action="/carro/{{$carro->id}}" method="POST" id="formulario">
            @csrf
            @method('patch')
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
                <input type="text" name="Marca" id="Marca" value="{{$carro->Marca}}"/>
            </div>
            <div class="">
                <input type="number" name="Modelo" id="Modelo" value="{{$carro->Modelo}}"/>
            </div>
            <div class="">
                <input type="number" name="Numero_serie" id="Numero_serie" value="{{$carro->Numero_serie}}"/>
            </div>
            <input type="submit" name="action" value="enviar"/>
            <div class= "container">
  <div class="select">
    <select name="marcas[]" multiple>
    @foreach($marcas as $marca)
                    <option value="{{$marca->id}}"
                    @if($carro->marcas->contains($marca->id))selected @endif>{{$marca->Nombre_marca}}</option>
                    @endforeach
    </select>
  </div>
</div> 

        </form>
    </body>

</html>