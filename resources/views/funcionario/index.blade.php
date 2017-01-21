@extends('templates.template')
@section('content')

<table class="table table-hover table-bordered text-center">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Setor</th>
            <th>Ações</th>
        </tr>
    </thead>

    <tbody>
        @foreach($funcionarios as $funcionario)
        <tr>
            <th>{{$funcionario->nome}}</th>
            <th>{{$funcionario->profissao}}</th>
            <th>Ações</th>
        </tr>
        @endforeach
    </tbody>

</table>



@endsection
