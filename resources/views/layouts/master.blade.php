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
     
     <style type="text/css">
            
        h1 {
            padding: 25px;
            text-align: center;
        }

        .padre {

            display: flex;
            flex-flow: row wrap;

        }

        .img, .txt a {
            float: left; 
            position: relative;  
        }

        .img:hover {

            top:-5px;
        }

        .clearfix {
        clear: both;
         }
        .txt a, .edit a {

             
            padding: 15px 5px;
            text-decoration: none;
            color: #888;

        }

        .txt a:hover, .edit a:hover {
        
            color: #222;

        } 

        


        


     </style>
       
    </head> 

    <body>
        
        @yield('content')

    </body>
    </html>