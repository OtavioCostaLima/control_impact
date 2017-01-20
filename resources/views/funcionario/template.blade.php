<html>
    <head>
        <title>{{$title or 'Painel Funcionário'}}
        </title> 
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="{{url("assets/painel/flaticon.css")}}">
    </head>
    <body>

        <nav class="navbar-default navbar-fixed-top">
            <div class="container">
                <ul class="nav navbar-nav">
                    <li ><a href="#"> Professores</a></li>
                    <li><a href="#">Alunos</a></li>
                    <li><a href="#">Turmas</a></li>
                    <li><a href="{{route('disciplina.index')}}"> Disciplinas  </a></li>
                </ul>
            </div>
        </nav>
        @yield('content')

    </body>
</html>
