@extends('layouts.master')

    <body>
        <div class="row justify-content-center">
        <div class="col-md-8 card border-dark mb-3" >
                  <div class="card-header"><h6><a href="/validar/paises">Regresar a la lista</a></h6></div>
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

                <h3> Manual para armar una expresion regular (aplicables a digitos) en php</h3>
                <p> /^ : inicio del string <br>
                    $/ : final del string <br> 
                    [x-y] : Un digito cuyo valor puede ser cualquiera comprendido entre "x" e "y" <br>
                    [x|y] : Un digito cuyo valor puede ser "x" o "y" <br>
                    [x-z|a-c] : Un digito cuyo valor esta entre "x" y "z" o entre "a" y "c" <br>
                    {x} : Se usa despues de alguna expresion como las anteriores para indicar que se esperan "x" valores con la misma restriccion <br>
                    <br>
                    Ejemplo: Numeros de Venezuela que inicien por 029X : /^029[1-5][0-9]{7}$/ <br>


                 </p>
        </div>
                    
                  
                
            
    </body>
    </html>