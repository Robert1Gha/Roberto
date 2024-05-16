<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Productos</title>
		@vite(['resources/css/mindex.css',])
	</head>
	<body>
		{{-- @if(session()->has('success'))
			<p>MUY BIEN</p>
		@endif --}}
		<h1 id="ta">Lista de marcas</h1>
		<p class="texto">Estos son todos los autos que has registado hasta el momento, presiona el enlace ir para mas informacion</p>
		<br>
		<p class="titulo"><b>Storecar</b></p>
		<a href="/Carro" class="mar">Carros</a>
		<a href="/Carro/Create" class="remar">Registrar carro</a>
		<a href="/Marca/Create" class="reg">Registrar marca</a>
		<table>
			<thead>
			  	<tr>
					<th>ID</th>
					<th>Nombre marca</th>
					<th>Versiones de auto</th>
					<th>Ver mas</th>
			  	</tr>
			</thead>
			<tbody>
        @foreach($marcas as $marca)
        <tr>
            <td class="color">{{$marca->id}}</td>
            <td>{{$marca->Nombre_marca}}</td>
            <td>{{$marca->Versiones_autos}}</td>
            <td><a href="/marca/{{$marca->id}}">IR</a></td>
        </tr>
        @endforeach
			</tbody>
		  </table>
	</body>
</html>