

  @extends('layouts.master')

  <body>
    <br>
    

  <div class="row justify-content-center">
        <div class="col-md-8 card border-dark mb-3" >
                  <div class="card-header"><h6><a href="/validar/paises">Regresar a la lista</a></h6></div>
                  @if ($flash = session('valid'))
                    <div class="alert alert-success" role="alert">
                      {{$flash}}
                    </div>
                  @endif

                  @if ($flash = session('invalid'))
                    <div class="alert alert-danger" role="alert">
                      {{$flash}}
                    </div>
                  @endif
                  <div class="card-body">
                    <h2 class="card-title">{{$list->country}}</h2>
                    <br>  
      
      <form method="POST" action="/validar/numero/{{$list->id}}">
        {{ csrf_field() }}

       <div class="form-group">
      <input type="text" name="numero" value="" class="form-control" required maxlength="15" onkeypress='return justNumbers(event);'>
      </div>
      
      <div class="form-group">
      <button type="submit" class="btn-success" ><h4>Validar</h4></button>
    </div>
      </form>


    </div>
    </div>

       <h3 > Manual de uso del validador de numeros telefonicos</h3>
       <br>
                <p> Escribir los numeros telefonicos sin espacios ni guiones <br>
                   Escribir los numeros telefonicos sin el simbolo "+" ni parentesis <br>
                   A excepcion de los casos donde el cero sea necesario, no incluirlo <br>
                    Las funciones Ctrl + c y Ctrl + v estan deshabilitadas en el formulario, use click derecho copiar y pegar de ser necesario <br>
                    
                    <br>
                    Ejemplo: 573003322116 <br>


                 </p>
               
    </div>



    <script type="text/javascript">
        function justNumbers(e)
            {
            var keynum = window.event ? window.event.keyCode : e.which;
            if ((keynum == 8) || (keynum == 46))
            return true;
             
            return /\d/.test(String.fromCharCode(keynum));
            }
    </script>

  </body>