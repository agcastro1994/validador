@extends('layouts.master')

    <body>
        <div class="row justify-content-center">
        <div class="col-md-8 card border-dark mb-3" >
                  <div class="card-header">Dashboard</div>
                  <div class="card-body">
                    <h4 class="card-title">Agregar expresion</h4>
                      <form method="POST" action="/agregar/expresion/{{$id}}">

                        {{ csrf_field() }}
                                             
                      <div class="form-group">  
                          <label for="exampleTextarea">Expresion Regular</label>
                          <input type="text" class="form-control" id="expresion" name="expresion" required>
                       </div>            
                       
                        
                        <div class="form-group">
                          <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
                                             
                    </form>

                    <a href="/validar/paises"><button type="button" class="btn btn-primary">Finalizar</button> </a>
                </div>
            </div>
        </div>
                    
                  
                
            
    </body>
    </html>