<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Validador telefonico</title>
</head>
<body>
		<h1>Paises</h1>

	<ol>
		@foreach($list as $list)
			<li><a href="/validar/{{$list->id}}">{{$list->country}}</a></li>
		@endforeach

	</ol>

	<a href="/crear">Agregar un nuevo pais</a>
</body>
</html>