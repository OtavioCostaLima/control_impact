@extends('templates.template')

@section('content')
@foreach($alunos as $aluno)
{{$aluno->matricula}}
{{$aluno->nome}}
@endforeach


