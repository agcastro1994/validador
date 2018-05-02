
@foreach($images as $image)
				@if($image->country_id == $list->id)
					<div class="img"> <a href="/validar/{{$list->id}}"><img src="{{ $image->route }}" height="50px" width="50px"> </a></div> 
					<div class="txt"> <a href="/validar/{{$list->id}}">{{$list->country}}</a> </div>
				@if (!(Auth::check()))
					 </br> <div class="clearfix"> </div>
				@endif
					@if (Auth::check()) </br> <div class="edit" style="clear: both;" ><a href="/editar/{{$list->id}}">Editar</a> <a href="/eliminar/{{$list->id}}">Eliminar</a> </div>@endif </br>
				@endif
			@endforeach