<html>
    <head>
        <title></title>
    </head>

    <body>
        @foreach($alunos as $aluno)
        {{$aluno->matricula}}
        {{$aluno->nome}}
        @endforeach

    </body>
</html>
