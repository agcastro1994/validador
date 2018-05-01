 @extends('layouts.master')

    
    
    @section('content')
        <div class="row justify-content-center">
        <div class="col-md-8 card border-dark mb-3" >
                  <div class="card-header">Dashboard</div>
                  <div class="card-body">
                    <h4 class="card-title">Crear pais</h4>
                      <form method="POST" action="/crear/imagen" enctype="multipart/form-data">
                                {{ csrf_field() }}             
                      <div class="form-group">

                          <label for="file">File input</label>
                          <input class="form-control-file" id="file" name="file" type="file">
                          <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                        </div> 
                       
                        
                        <div class="form-group">
                          <button type="submit" class="btn btn-success">Publicar</button>
                        </div>
                                             
                    </form>
                </div>
            </div>
        </div>
                    
    @endsection              