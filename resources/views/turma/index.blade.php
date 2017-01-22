@extends('templates.template')
@section('content')

<table class="table table-striped">
    <thead>
        @foreach($turmas as $turma)
        {{$turma->aluno()}}
        @endforeach
    </thead>
    
</table>
@endsection

