<html>
    <head >
        <title>{{$title or 'Painel Principal'}}
        </title> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!-- Latest compiled and minified CSS -->

        <link href="{{url("materialize/material-icons/material-icons.css")}}" rel="stylesheet">
        <link href="{{url("materialize/css/materialize.css")}}" rel="stylesheet" type="text/css"/> <link href="{{url("materialize/material-icons/material-icons.css")}}" rel="stylesheet">
        <link href="{{url("materialize/css/materialize.css")}}" rel="stylesheet" type="text/css"/>

    </head>
    <body > 
        @yield('content')
         <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="{{url("materialize/js/materialize.js")}}" type="text/javascript"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    </body>
     @yield('scripts')
     
</html>
