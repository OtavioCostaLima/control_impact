@extends('templates.template')
@section('content')

<table class="table table-striped"> 
    <thead>
        <tr>
            <th>Nome</th>
            <th>Turma</th>
            <th>Turno</th>
             <th>Serie</th>
             <th>modalidade</th>
             <th>Ações</th>
        </tr>


    </thead>
    <tbody>
        <tr>
            @foreach ($series as $serie)
            @foreach ($serie->aluno as $aluno)
            <th> {{$aluno->nome}}</th>
            <th> {{$aluno->pivot->descricao}}</th>
            <th> {{$aluno->pivot->turno}}</th>
            <th> {{$serie->descricao}}</th>
            <th> {{$serie->tipo}}</th>
            <th>{{$aluno->data_nascimento}}</th>
        </tr>
        @endforeach
        @endforeach
    </tbody>

</table>




@endsection

