<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Productos</title>
		@vite(['resources/css/cindex.css',])
	</head>
	<body>
		{{-- @if(session()->has('success'))
			<p>MUY BIEN</p>
		@endif --}}
		<h1 id="ta">Lista de Automoviles</h1>
		<p class="texto">Estos son todos los autos que has registado hasta el momento, presiona el enlace ir para mas informacion</p>
		<br>
		<p class="titulo"><b>Storecar</b></p>
		<a href="/Marca" class="mar">Marcas</a>
		<a href="/Marca/Create" class="remar">Registrar marca</a>
		<a href="/Carro/Create" class="reg">Registrar Auto</a>
		<table>
			<thead>
			  	<tr>
					<th>Id</th>
					<th>Marca</th>
					<th>Modelo</th>
					<th>Numero de serie</th>
					<th>Marca</th>
					<th>Ver mas</th>
			  	</tr>
			</thead>
			<tbody>
        @foreach($carros as $carro)
        <tr>
            <td class="color">{{$carro->id}}</td>
            <td>{{$carro->Marca}}</td>
            <td>{{$carro->Modelo}}</td>
            <td>{{$carro->Numero_serie}}</td>
			<td>
				@foreach($carro->marcas as $marca)
				{{$marca->Nombre_marca}}<br>
				@endforeach
			</td>
            <td><a href="/carro/{{$carro->id}}" class="enlace">Ir</a></td>
        </tr>
        @endforeach
			</tbody>
		</table>
	</body>
</html>