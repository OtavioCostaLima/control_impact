@extends('templates.template')

@section('content')

{!!Form::open(['route' =>'funcionario.store'])!!}
<div class="container"> 
    <!--formulário aluno-->
    <div class="form-group col-md-8">
        <label class="control-label">Nome Professor</label>
        <div class="input-group">
            <span class="input-group-addon glyphicon glyphicon-user" id="basic-addon1"></span>
            {!! Form::text('nome',null,['class'=>'form-control','placeholder'=>'Nome Professor', 'aria-describedby'=>'basic-addon1'])!!}
        </div>
    </div>

    <div class="form-group col-md-2">
        <label class="control-label">Sexo</label>
        <div>
            {!! Form::select('sexo', ['M' => 'Masculino', 'F' => 'Feminino'],null,['class'=>'form-control'])!!}
        </div>
    </div>

    <div class="form-group col-md-2">
        <label class="control-label">Data Nascimento</label>
        <div class="formulario">
            {!!Form::date('data_nascimento',null,['class'=>'form-control col-md-6'])!!}
        </div>
    </div>
    <div class="form-group col-lg-4">
        <label class="control-label">CPF</label>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="CPF" aria-describedby="basic-addon1" name="cpf" value="" id="cpf">
        </div>
    </div>
    <div class="form-group col-lg-4">
        <label class="control-label">Grau</label>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Grau" aria-describedby="basic-addon1" name="grau" value="">
        </div>
    </div>
    <div class="form-group col-lg-4">
        <label class="control-label">Profissão</label>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Profissão" aria-describedby="basic-addon1" name="profissao" value="">
        </div>
    </div>

    <div class="form-group col-lg-4">
        <label class="control-label">Naturalidade</label>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Naturalidade" aria-describedby="basic-addon1" name="naturalidade" value="">
        </div>
    </div>

    <div class="form-group col-lg-4">
        <label class="control-label">Nascionalidade</label>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Nascionalidade" aria-describedby="basic-addon1" name="nacionalidade" value="">
        </div>
    </div>

    <div class="form-group col-lg-4">
        <label class="control-label">Identidade</label>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Identidade" aria-describedby="basic-addon1" name="identidade" value="">
        </div>
    </div>

    <div class="form-group col-lg-4">
        <label class="control-label">Emissor</label>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Emissor" aria-describedby="basic-addon1" name="emissor" value="">
        </div>
    </div>

    <div class="form-group col-md-4">
        <label class="control-label">Data Emissão</label>
        <div class="formulario">
            <input name="data_emissao" type="text" class="form-control col-md-6" id="data" value="">
        </div>
    </div>


    <div class="form-group col-lg-4">
        <label class="control-label" >CEP</label>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="CEP" aria-describedby="basic-addon1" name="cep" value="" id="cep">
        </div>
    </div>
    <div class="form-group col-lg-4">
        <label class="control-label" >Email</label>
        <div class="input-group">
            <input name="email" type="text" class="form-control" placeholder="Digite seu email" aria-describedby="basic-addon2">
            <span class="input-group-addon glyphicon-envelope" id="basic-addon2"></span>
        </div>
    </div>

    <div class="form-group col-lg-4">
        <label class="control-label">Celular</label> 
        <div class="form-group">
            <input name="celular" type="text" id="telefone" class="form-control p" placeholder="( ) -" aria-describedby="basic-addon2">
        </div>
    </div>

    <div class="form-group col-md-4">
        <label class="control-label">Estado civil</label>
        <div>
            {!!Form::select('civil',['solteira'=>'Solteira','casada'=>'Casada','separada'=>'Separada'],null,['class'=>'form-control'])!!}

        </div>
    </div>

    <div class="form-group col-lg-12">
        <label class="control-label">Endereço</label>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Endereço" aria-describedby="basic-addon1" name="endereco" value="">
        </div>
    </div>

    <div class="form-group col-md-2">
        <label class="control-label">Número</label> 
        <input name="numero_casa" type="text" class="form-control  pp">
    </div>

    <div class="form-group col-md-4">
        <label class="control-label">Estado</label>
        <div>
            {!!Form::select('estado',['AC'=>'Acre','AL'=>'Alagoas','AP'=>'Amapá','AM'=>'Amazonas','BA'=>'Bahia','CE'=>'Ceará','DF'=>'DistritoFederal','ES'=>'EspiritoSanto','GO'=>'Goiás','MA'=>'Maranhão','MS'=>'MatoGrossodoSul','MT'=>'MatoGrosso','MG'=>'MinasGerais','PA'=>'Pará','PB'=>'Paraíba','PR'=>'Paraná','PE'=>'Pernambuco','PI'=>'Piauí','RJ'=>'RiodeJaneiro','RN'=>'RioGrandedoNorte','RS'=>'RioGrandedoSul','RO'=>'Rondônia','RR'=>'Roraima','SC'=>'SantaCatarina','SP'=>'SãoPaulo','SE'=>'Sergipe','TO'=>'Tocantins'],null,['class'=>'form-control'])!!}
        </div>
    </div>

    <div class="form-group col-md-6">
        <label class="control-label" for="municipio">Complemento</label> 
        <input name="complemento" type="text" class="form-control  m">
    </div>

    <div class="form-group col-md-6">
        <label class="control-label" for="municipio">Bairro</label> 
        <label>Bairro</label> <input name="bairro" type="text" class="form-control p">
    </div>

    <div class="form-group col-lg-6">
        <label class="control-label" for="municipio">Cidade</label> 
        <label>Cidade</label> <input name="cidade" type="text" class="form-control  p">
    </div>
    <div class="form-group col-lg-6">{!!Form::submit('Enviar',['class'=>'btn btn-primary'])!!}</div>

    {!!Form::close()!!}

</div>
@endsection

