@extends('templates.template')

@section('content')

<div class="container">
    <a href="{{route('disciplina.create')}}" class="btn btn-primary">Cadastrar</a>
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
                <td> 
                    <a href="{{route('disciplina.edit',$disciplina->id)}}"><span class="glyphicon glyphicon-pencil"></span></a>
                    <a href="{{route('disciplina.show',$disciplina->id)}}"><span class="glyphicon glyphicon-remove"></span></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>




@endsection
