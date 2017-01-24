@extends('templates.template')

@section('content')

@foreach($alunos as $aluno)
{{$aluno->familia->nome_pai}}
@endforeach
@endsection
