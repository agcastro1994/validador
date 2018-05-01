@extends('layouts.master')

@section('content')
		<h1>Paises</h1>

	<ul>
		@foreach($list as $list)
			@include ('main.list')
		@endforeach

	</ul>
	@if (Auth::check())
		<a href="/crear">Agregar un nuevo pais</a>
	@endif
@endsection