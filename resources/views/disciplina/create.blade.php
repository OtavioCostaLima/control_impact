@extends('templates.template')

@section('content')

@if(isset($disciplina))
<form class="form" action="{{route('disciplina.update',$disciplina->id)}}" method="post">
    {!! method_field('PUT')!!}
    @else
    <form class="form" action="{{route('disciplina.store')}}" method="post">
        @endif

        {!! csrf_field() !!}
        <div class="form-group col-lg-6">
            <label>Nome Disciplina</label>
            <input class="form-control col-lg-6" placeholder="Nome da Disciplina" name="descricao" value="{{$disciplina->descricao or old('descricao')}}" required>
        </div>
        <div class="form-group col-lg-6">
            <label>Tipo</label>
            <select class="form-control col-lg-6" name="tipo" required="">
                <option value="">Selecione um tipo</option>
                @foreach($tipos as $tipo)
                <option value="{{$tipo}}"  
                        @if(isset($disciplina) && $disciplina->tipo==$tipo) 
                        selected
                        @endif>{{$tipo}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-lg-12">
            <input type="submit" class="btn btn-primary">
        </div>
    </form>
    @endsection