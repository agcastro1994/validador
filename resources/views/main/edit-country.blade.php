@extends('layouts.master')
<body>
		<h1>{{$country->country}}</h1>
		<a href="/editar/nombre/{{$country->id}}">Editar nombre</a>

	<ol>
		@foreach($expresion as $expresion)
			<li>{{$expresion->expresion}}  <a href="/eliminar/expresion/{{$expresion->id}}">Eliminar</a> </li>
		@endforeach

	</ol>
	
		<a href="/agregar/{{$country->id}}">Agregar expresion</a>
	
</body>