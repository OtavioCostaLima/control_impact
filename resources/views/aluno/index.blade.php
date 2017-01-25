@extends('templates.template')

@section('content')
<div ng-app="">
 	<p>Name : <input type="text" ng-model="name"></p>
 	<h1>Hello @{{name}}</h1>
</div>
@foreach($alunos as $aluno)
{{$aluno->familia->nome_pai}}
@endforeach
@endsection
