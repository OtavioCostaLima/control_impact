@extends('templates.template')

@section('content')


<form class="form" action="{{route('disciplina.store')}}" method="post">
    {!! csrf_field() !!}
    <div class="form-group col-lg-6">
        <label>Nome Disciplina</label>
        <input class="form-control col-lg-6" placeholder="Nome da Disciplina" name="descricao" required>
    </div>
    <div class="form-group col-lg-6">
        <label>Tipo</label>
        <select class="form-control col-lg-6" name="tipo" required="">
            <option value="1">Reprova</option>
            <option value="2">Não Reprova</option>
        </select>
    </div>
    <div class="form-group col-lg-12">
        <input type="submit" class="btn btn-primary">
    </div>
</form>
@endsection