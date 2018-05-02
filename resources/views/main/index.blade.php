@extends('layouts.master')

@section('content')
		<div class="container">
			<h1>Paises</h1>
			@if (Auth::check())
				<a href="/crear">Agregar un nuevo pais</a>
			@endif

		</br>
		</br>
		</br>

			<div class="main row">
				<?php $counter = 0;  ?>
				

				<div class="padre col col-md-12">
					
					@foreach($list as $list)
					
					@if($counter==0)
						<div class="col col-md-3">
							@include ('main.list')
					@endif

					@if($counter%7 == 0 and $counter!=0)
						</div>
						<div class="col col-md-3">					
							@include ('main.list')
						
					@endif

					@if($counter%7 != 0)											
							@include ('main.list')						
					@endif

					<?php $counter++;  ?>
						
					@endforeach
					</div>
				</div>
			</div>
			
</div>
@endsection