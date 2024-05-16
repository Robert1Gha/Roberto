<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Carros</title>
		@vite(['resources/css/cshow.css',])
	</head>
	<body>
	<h1 id="ta">Informacion de automovil</h1>
	<p class="texto">Esta en la informacion general del automovil, modifica o elimina la informacion del registro del auto</p>
    <a href="/Carro" class="mar">Carros</a>
		<br>
		<p class="titulo"><b>Storecar</b></p>
		<a href="/Carro/Create" class="remar">Registrar Automovil</a>
		<table>
			<thead>
			  	<tr>
					<th>Marca</th>
					<th>Modelo</th>
					<th>Numero de serie</th>
					<th>Opciones</th>
			  	</tr>
			</thead>
			<tbody>
        <tr>
            <td>{{$carro->Marca}}</td>
            <td>{{$carro->Modelo}}</td>
            <td>{{$carro->Numero_serie}}</td>
            <td><a href="/carro/{{$carro->id}}/edit">Modificar</a></td>
        </tr>
			</tbody>
		</table>

		<form method="POST" action="/carro/{{$carro->id}}" id="formulario">
			@csrf
			@method('DELETE')		
			<input type="submit" class="btn_center" name="action" value="Eliminar">
		</form>
	</body>

</html>