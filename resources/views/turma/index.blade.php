@extends('templates.template')
@section('content')

<div class="form-group col-lg-6">
    <label>Turmas</label>
    {!!Form::select('turno',$turnos,null,['class'=>'form-control col-lg-6','required'=>""])!!}
</div>

<div class="form-group col-lg-12">
    {!!Form::submit('Cadastrar',['class'=>'btn btn-primary']) !!}
</div>
{!!Form::close()!!}
@endsection

