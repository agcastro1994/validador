@foreach($images as $image)
				@if($image->country_id == $list->id)
					<li> <img src="{{ $image->route }}" height="50px" width="50px"><a href="/validar/{{$list->id}}">{{$list->country}}</a> 
					@if (Auth::check()) </br><a href="/editar/{{$list->id}}">Editar</a> <a href="/eliminar/{{$list->id}}">Eliminar</a>@endif</li> </br>
				@endif
			@endforeach