<html>
  <head>
    <meta charset="utf-8">
    <title>Validador de Tarjetas</title>
    <style>
      body {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, Helvetica, sans-serif;
        background: #f2f2f2;
      }
      .contenedor {
        width: 80%;
        max-width: 500px;
        margin: 50px auto;
        background: rgb(36, 90, 160);
        border-radius: 5px;
      }
      h2{
        font-size: 22px;
        /*width: 20%;*/
        margin: auto;
        text-align: center;
        
        color: #fff;
        padding: 5px 0;
        cursor: pointer;
        border-radius: 3px;
      } 

      h3{
        font-size: 16px;
        /*width: 20%;*/
        margin: auto;
        text-align: center;
        
        color: #fff;
        padding: 5px 0;
        cursor: pointer;
        border-radius: 3px;
      }  

      button {
        background: rgb(248, 116, 34);
        margin: 0 40%;
      }
      .input{
        margin: 25px 50px;    
        display: inline-block;
        width: 80%;   
        padding: 10px; 
        font-size: 20px;    
        border-radius: 3px;
      }

      /* exten => _57[1-24-8]XXXXXXX,1,Noop()                                            ; 57 Country code, 1-2|4-8 Regional code, 7 digits numbers
 



 exten => _573XXXXXXXXX,1,Noop()                                              ; 57 Country code, 3 cellphone code, 9 digits numbers*/
             
      </style>
  </head>
  <body>


    <div class="contenedor">
      
      <form method="POST" action="/validar/numero/{{$list->id}}">
        {{ csrf_field() }}

        <h2> {{$list->country}}</h2>
      <input type="text" name="numero" value="" class="input" required maxlength="15" onkeypress='return justNumbers(event);'>
      <button type="submit" class="" ><h3>Validar</h3></button>
      </form>

           
      
        
        
        <!-- $expresionFijo = '/^57[1-2|4-8][0-9]{7}$/';
        $expresionCel  = '/^573[0-9]{9}$/';
 -->

               



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