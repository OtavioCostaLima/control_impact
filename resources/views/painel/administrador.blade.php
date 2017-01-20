@extends('templates.template')

@section('content')
<div class="container">

    <a href="{{route('professor.index')}}" class="btn btn-primary">PROFESSORES</a>
    <a href="{{route('aluno.index')}}" class="btn btn-primary">ALUNOS</a>
    <a href="" class="btn btn-primary">SERIES</a>
    <a href="{{route('disciplina.index')}}" class="btn btn-primary">DISCIPLINAS</a>
</div>
@endsection
