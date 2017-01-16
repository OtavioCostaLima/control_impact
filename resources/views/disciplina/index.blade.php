@extends('templates.template')

@section('content')

<div class="container">
    <table class="table table-bordered table-hover text-center">
        <thead>
            <tr>
                <th>Disciplina</th>
                <th>Tipo</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach($disciplinas as $disciplina)
                <td> {{$disciplina->descricao}}</td>
                <td> {{$disciplina->tipo}}</td>
                <td> <a href=""><span class="glyphicon glyphicon-pencil"></span></a>
                    <a href="{{'disciplina/deletar/'.$disciplina->id}}"><span class="glyphicon glyphicon-remove"></span></a></td>
</tr>
@endforeach
</tbody>
</table>
</div>


<a href="{{route('disciplina.create')}}" class="btn btn-primary">Cadastrar</a>

@endsection
