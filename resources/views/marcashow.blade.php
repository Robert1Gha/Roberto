<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Carros</title>
		@vite(['resources/css/cshow.css',])
	</head>
	<body>
	<h1 id="ta">Informacion de marca</h1>
	<p class="texto">Esta en la informacion general de la marca, modifica o elimina la informacion del registro de la Marca</p>
    <a href="/Carro" class="mar">Marcas</a>
		<br>
		<p class="titulo"><b>Storecar</b></p>
		<a href="/Carro/Create" class="remar">Registrar Marca</a>

		<table>
			<thead>
			  	<tr>
					<th>Nombre de marca</th>
					<th>Modelos de marca en el sistema</th>
					<th>Opciones</th>
			  	</tr>
			</thead>
			<tbody>
        <tr>
            <td>{{$marca->Nombre_marca}}</td>
            <td>{{$marca->Versiones_autos}}</td>
            <td><a href="/marca/{{$marca->id}}/edit">Modificar</a></td>
        </tr>
			</tbody>
		</table>
		<form method="POST" action="/marca/{{$marca->id}}" id="formulario">
			@csrf
			@method('DELETE')		
			<input type="submit" class="btn_center" name="action" value="Eliminar">
		</form>
	</body>

</html>