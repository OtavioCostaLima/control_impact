@extends('templates.template')

@section('')
<form method="post" data-toggle="validator" id="formTurma">
    {!!Form::open('route'=>'funcionario.store') !!}
    <div class="form-group col-lg-6">
        <label>Nome Turma</label>
        {!! Form::text('descricao',null,['classe'=>'form-control col-lg-6','placeholder'=>'EX: 1° ANO']);!!}
    </div>
    <div class="form-group col-lg-6">
        <label>Sigla</label>
        <input class="form-control col-lg-6" placeholder="Ex: A" name="sigla" required="">
    </div>
    <div class="form-group col-lg-6">
        <label>Ano</label>
        <input class="form-control col-lg-6" placeholder="Ex: 2016" name="ano" required="">
    </div>

    <div class="form-group col-lg-6">
        <label>Turno</label>
        <select class="form-control col-lg-6" name="turno" required>
            <option value="" selected="disabled" >escolher</option>  
            <option value="Manhã">Manhã</option>
            <option value="Tarde">Tarde</option>
            <option value="Noite">Noite</option>
        </select>
    </div>

    <div class="form-group col-lg-12">
        <input type="submit" class="btn btn-primary" name="cadastrar" value="cadastrar">
    </div>
</form>

