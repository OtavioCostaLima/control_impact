@extends('templates.template')
@section('content')

@if(isset($disciplina))
{!! Form::model($disciplina,['route'=>['disciplina.update', $disciplina->id],'class'=>'form','method'=>'put'])!!}
@else
{!!Form::open(['route'=>'disciplina.store'])!!}
@endif
<div class="form-group col-lg-6">
    <label>Nome Disciplina</label>
    {!! Form::text('descricao',null,['class'=>'form-control col-lg-6','placeholder'=>'Nome da Disciplina'])!!}
</div>
<div class="form-group col-lg-6">
    <label>Tipo</label>
    {!! Form::select('tipo', $tipos,null,['class'=>'form-control col-lg-6','required'=>""])!!}
</div>
<div class="form-group col-lg-12">
    {!!Form::submit('Enviar',['class'=>'btn btn-primary'])!!} 
</div>
{!!Form::close()!!}
@endsection