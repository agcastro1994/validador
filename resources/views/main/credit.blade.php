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
      h1{
        font-size: 22px;
        width: 20%;
        margin: auto;
        text-align: center;
        background: rgb(248, 116, 34);
        color: #fff;
        padding: 5px 0;
        cursor: pointer;
        border-radius: 3px;
      }   
      .input{
        margin: 25px 50px;    
        display: inline-block;
        width: 80%;   
        padding: 10px; 
        font-size: 20px;    
        border-radius: 3px;
      }
      h2{
        font-size: 26px;
        text-align: center;
        padding-bottom: 20px;
        color: #fff;
      }        
      </style>
  </head>
  <body>
    <div class="contenedor">
      
      <input type="text" name="" value="" class="input" required maxlength="16" onkeypress='return justNumbers(event);'>
      <h1>Validar</h1>
      <h2 id="asd"></h2>

    </div>

  </body>
  <script type="text/javascript" src="/js/jquery.min.js"></script>
  <script type="text/javascript" src="/js/jquery.creditCardValidator.js"></script>
  <script type="text/javascript">
        $("h1").on("click",function(){
          asd = $("input").validateCreditCard()
          document.getElementById("asd").innerHTML = asd.valid ? asd.card_type.name : "Invalid";
        })



  </script>

  <script type="text/javascript">
        function justNumbers(e)
            {
            var keynum = window.event ? window.event.keyCode : e.which;
            if ((keynum == 8) || (keynum == 46))
            return true;
             
            return /\d/.test(String.fromCharCode(keynum));
            }
    </script>

</html>
