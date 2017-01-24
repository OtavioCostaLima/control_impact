<html>
    <head >
        <title>{{$title or 'Painel Principal'}}
        </title> 
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="{{url("bootstrap/css/bootstrap.min.css")}}" >
    </head>
    <body > 
        @yield('content')

    </body>
</html>
