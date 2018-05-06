    @extends('layouts.master')

    
    
    @section('content')
        <div class="row justify-content-center">
        <div class="col-md-8 card border-dark mb-3" >
                  <div class="card-header"><h6><a href="/validar/paises">Regresar a la lista</a></h6></div>
                  <div class="card-body">
                    <h4 class="card-title">Crear pais</h4>
                      <form method="POST" action="/crear/pais">
                            {{ csrf_field() }}                 
                      <div class="form-group">  
                        
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
                
            
    