<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Validador</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
     
       
    </head> 

    <body>
        <div class="row justify-content-center">
        <div class="col-md-8 card border-dark mb-3" >
                  <div class="card-header">Dashboard</div>
                  <div class="card-body">
                    <h4 class="card-title">Crear expresion</h4>
                      <form method="POST" action="/crear/expresion">

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