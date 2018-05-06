@extends('layouts.master')
<body>
	<br>
		<h6><a href="/validar/paises">Regresar a la lista</a></h6>
		
		<h1>{{$country->country}}</h1>
		<div style="width:100%; text-align: center;"><a  href="/editar/nombre/{{$country->id}}">Editar nombre</a></div>

	<ol>
		@foreach($expresion as $expresion)
			<li>{{$expresion->expresion}}  <a href="/eliminar/expresion/{{$expresion->id}}">Eliminar</a> </li>
		@endforeach

	</ol>
	
		<a href="/agregar/{{$country->id}}">Agregar expresion</a>
	
</body>