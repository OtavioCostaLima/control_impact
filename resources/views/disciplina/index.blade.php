@extends('templates.template')

@section('content')

<div class="container">
    <table class="highlight centered">
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

                    <a href="{{route('disciplina.edit',$disciplina->id)}}"><span class="material-icons">mode_edit</span></a>
                    <a href="{{route('disciplina.show',$disciplina->id)}}"><span class="material-icons">delete</span></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>



<div class="fixed-action-btn">
    <a class="btn-floating btn-large waves-effect waves-light red" href="{{route('disciplina.create')}}"><i class="material-icons">add</i></a>
</div>
@endsection
