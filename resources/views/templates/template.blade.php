<html>
    <head >
        <title>{{$title or 'Painel Principal'}}
        </title> 
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="{{url("bootstrap/css/bootstrap.min.css")}}" >
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">

        <!-- Compiled and minified JavaScript -->
        <script type="text/javascript" src="//code.jquery.com/jquery-2.1.4.js"></script><style type="text/css"></style>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">    
        <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
       

    </head>
    <body > 
        @yield('content')


    </body>
</html>
