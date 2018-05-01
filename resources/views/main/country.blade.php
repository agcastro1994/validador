@extends('layouts.master')
     
@section('content')       
    
        <div class="row justify-content-center">
        <div class="col-md-8 card border-dark mb-3" >
                  <div class="card-header">Dashboard</div>
                  <div class="card-body">
                    <h4 class="card-title">Cambiar nombre de {{$country->country}} </h4>
                      <form method="POST" action="/guardar/nombre/{{$country->id}}">
                                             
                      <div class="form-group">  
                        {{ csrf_field() }}
                          <label for="exampleTextarea">Pais</label>
                          <input type="text" class="form-control" id="country" name="country" required>
                       </div>            
                       
                        
                        <div class="form-group">
                          <button type="submit" class="btn btn-success">Publicar</button>
                        </div>
                                             
                    </form>
                </div>
            </div>
        </div>
      @endsection             
                  
                
            
    