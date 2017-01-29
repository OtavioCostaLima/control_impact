@extends('templates.template')

@section('content')
<div class="container">
    @if(isset($aluno))
    {!! Form::model($aluno,['route'=>['aluno.update', $aluno->matricula],'class'=>'form','method'=>'put'])!!}
    @else
    {!!Form::open(['route'=>'disciplina.store'])!!}
    @endif
    <h3>Cadastrar Aluno</h3>
    <p>Primeiro Passo</p>
    <ul class="list-inline pull-right">

        <div class="row"> 
            <!--formulário aluno-->
            <div class="input-field col s12 l8 m8">
                <i class="material-icons prefix">perm_identity</i>
                {!!Form::text('nome_aluno',null,['class'=>'validate','aria-describedby'=>'basic-addon1', 'id'=>'nome_aluno'])!!}
                <label for="nome_aluno">Nome Aluno</label>
            </div>

            <div class="input-field col s6 l4 m4">
                {!! Form::select('sexo', ['M' => 'Masculino', 'F' => 'Feminino'],null,['id'=>'sexo_aluno'])!!}
                <label for="sexo_aluno">Sexo</label>
            </div>

            <div class="input-field col s6 l4 m4">
                {!!Form::text('data_nascimento',null,['class'=>'datepicker','id'=>'data_nascimento'])!!}
                <label for="data_nascimento">Data Nascimento</label>
            </div>


            <div class="input-field col s12 l6 m4">
                {!!Form::text('naturalidade',null,['class'=>'validate','aria-describedby'=>'basic-addon1','id'=>'naturalidade'])!!}
                <label for="naturalidade">Naturalidade</label>

            </div>

            <div class="input-field col s12 l4 m4">
                {!!Form::text('nacionalidade',null,['class'=>'validate','aria-describedby'=>'basic-addon1','id'=>'nacionalidade'])!!}
                <label for="nacionalidade">Nascionalidade</label>
            </div>

            <div class="input-field col s6 l4 m4">
                <input type="text" class="form-control" aria-describedby="basic-addon1" name="certidao" value="" id="certidao" required>
                <label for="certidao">Certidão</label>
            </div>

            <div class="input-field col s6 l4 m4">
                <input type="text" class="form-control" aria-describedby="basic-addon1" name="termo" value="" id="termo" required>
                <label for="termo">Termo</label>
            </div>

            <div class="input-field col s4 l4 m4">
                <input type="text" class="form-control" aria-describedby="basic-addon1" name="folha" value="" id="folha" required>
                <label for="folha">Folha</label>
            </div>

            <div class="input-field col s3 l4 m4">
                <input type="text" class="form-control" aria-describedby="basic-addon1" name="livro" id="livro" value="" required>
                <label for="livro">Livro</label>
            </div>

            <div class="input-field col s5 l4 m4">
                <input name="data_emissao" type="date" class="datepicker" id="data_emissao" value="" required>
                <label for="data_emissao">Data Emissão</label>
            </div>

            <div class="input-field col s4 l4 m4">
                <input type="text" class="validate" aria-describedby="basic-addon1" name="cartorio" id="cartorio" required>
                <label for="cartorio">Cartorio</label>
            </div>

            <div class="input-field col s4 l4 m4">
                <input name="email_aluno" type="text" class="validate"  aria-describedby="basic-addon2" id="email_aluno" required>
                <label for="email_aluno" >Email</label>
            </div>

            <div class="input-field col s4 l4 m4">
                <input name="celular_aluno" type="text" class="validate"  aria-describedby="basic-addon2" id="celular_aluno" required>
                <label for="celular_aluno">Celular</label> 
            </div>

            <div class="input-field col s4 l4 m4">
                <input type="text" class="validate"  aria-describedby="basic-addon1" name="cep_aluno"  id="cep_aluno" value="" required>
                <label for="cep_aluno" >CEP</label>
            </div>

            <div class="input-field col s4 l4 m4">
                <input type="text" class="validate"  aria-describedby="basic-addon1" name="endereco_aluno" id="endereco_aluno" value="" required>
                <label for="endereco_aluno">Endereço</label>
            </div>

            <div class="input-field col s2 l2 m2">
                <input name="numero_casa_aluno" type="text" class="validate" id="numero_casa_aluno" required>
                <label for="numero_casa_aluno">Número</label> 
            </div>

            <div class="input-field col s2 l2 m2">
                <input name="complemento_aluno" type="text" class="validate" id="complemento_aluno" required>
                <label for="complemento_aluno">Complemento</label> 
            </div>

            <div class="input-field col s2 l2 m2">
                <input name="bairro_aluno" type="text" class="validate"  id="bairro_aluno" required>
                <label for="bairro_aluno">Bairro</label> 
            </div>

            <div class="input-field col s2 l2 m2">
                <input name="cidade_aluno" type="text" class="form-control  p" id="cidade_aluno" required> 
                <label for="cidade_aluno">Cidade</label> 
            </div>



            <div class="input-field col s2 l2 m2">
                {!!Form::select('estado',['AC'=>'Acre','AL'=>'Alagoas','AP'=>'Amapá','AM'=>'Amazonas','BA'=>'Bahia','CE'=>'Ceará','DF'=>'DistritoFederal','ES'=>'EspiritoSanto','GO'=>'Goiás','MA'=>'Maranhão','MS'=>'MatoGrossodoSul','MT'=>'MatoGrosso','MG'=>'MinasGerais','PA'=>'Pará','PB'=>'Paraíba','PR'=>'Paraná','PE'=>'Pernambuco','PI'=>'Piauí','RJ'=>'RiodeJaneiro','RN'=>'RioGrandedoNorte','RS'=>'RioGrandedoSul','RO'=>'Rondônia','RR'=>'Roraima','SC'=>'SantaCatarina','SP'=>'SãoPaulo','SE'=>'Sergipe','TO'=>'Tocantins'],null,['class'=>'form-control','id'=>'estado'])!!}
                <label for="estado">Estado</label>
            </div>
        </div>
        <!--fim formulário aluno-->
    </ul>


    <h3>Dados da Mae</h3>
    <p>Segundo Passo</p>
    <ul class="list-inline pull-right">
        <!-- formulário mae-->
        <div class="col-lg-12"> 
            <div class="input-field col s12 l8 m8">
                {!!Form::text('nome_mae',null,['class'=>'form-control','aria-describedby'=>'basic-addon1','id'=>'nome_mae'])!!}
                <label for="nome_mae">Mãe</label>

            </div>

            <div class="input-field col s12 l4 m4">
                {!!Form::select('civil_mae',['solteira'=>'Solteira','casada'=>'Casada','separada'=>'Separada'],null,['class'=>'form-control','id'=>'civil_mae'])!!}
                <label for="civil_mae">Estado civil</label>
            </div>

            <div class="input-field col s4 l4 m4">
                {!!Form::text('naturalidade_mae',null,['class'=>'form-control','aria-describedby'=>'basic-addon1','id'=>'naturalidade_mae'])!!}
                <label for="naturalidade_mae">Naturalidade</label>
            </div>


            <div class="input-field col s4 l4 m4">
                {!!Form::text('nacionalidade_mae',null,['class'=>'form-control','aria-describedby'=>'basic-addon1','id'=>'nacionalidade_mae'])!!}
                <label for="nacionalidade_mae">Nascionalidade</label>
            </div>

            <div class="input-field col s4 l4 m4">
                {!!Form::text('cpf_mae',null,['class'=>'form-control','id'=>'cpf_mae'])!!}
                <label for="cpf_mae">CPF</label>
            </div>

            <div class="input-field col s4 l4 m4">
                {!!Form::text('grau_mae',null,['class'=>'form-control','aria-describedby'=>'basic-addon1','id'=>'grau_mae'])!!}
                <label for="grau_mae">Grau</label>
            </div>

            <div class="input-field col s4 l4 m4">
                {!!Form::text('profissao_mae',null,['class'=>'form-control','aria-describedby'=>'basic-addon1','id'=>'profissao_mae'])!!}
                <label for="profissao_mae">Profissão</label>
            </div>

            <div class="input-field col s4 l4 m4">
                {!!Form::email('email_mae',null,['class'=>'form-control','aria-describedby'=>'basic-addon1','id'=>'email_mae'])!!}
                <label for="email_mae">Email</label>
            </div>

            <div class="form-group col-lg-2">
                <input name="celular_mae" type="text" class="form-control p" aria-describedby="basic-addon2" id="celular_mae">
                <label for="celular_mae">Celular</label> 
            </div>

            <div class="input-field col s4 l4 m4">
                <input type="text" class="form-control" placeholder="CEP" aria-describedby="basic-addon1" name="cep_mae" value="">
                <label for="contrl">CEP</label>
            </div>

            <div class="input-field col s4 l4 m4">
                {!!Form::text('endereco_mae',null,['class'=>'form-control','aria-describedby'=>'basic-addon1','id'=>'endereco_mae'])!!}
                <label for="endereco__mae">Endereço</label>
            </div>

            <div class="form-group col-md-2">
                {!!Form::text('numero_casa_mae',null,['class'=>'formnumero_casa_mae-control','aria-describedby'=>'basic-addon1','id'=>'numero_casa_mae'])!!}
                <label for="numero_casa__mae" >Número</label> 
            </div>

            <div class="input-field col s12 l4 m4">

                {!!Form::text('complemento_mae',null,['class'=>'form-control','aria-describedby'=>'basic-addon1','id'=>'complemento_mae'])!!}
                <label for="complemento_mae" >Complemento</label> 
            </div>

            <div class="form-group col-md-6">
                {!!Form::text('bairro_mae',null,['class'=>'form-control','aria-describedby'=>'basic-addon1','id'=>'bairro_mae'])!!}
                <label for="bairro_mae" >Bairro</label> 
            </div>

            <div class="input-field col s4 l4 m4">
                {!!Form::text('cidade_mae',null,['class'=>'form-control','aria-describedby'=>'basic-addon1','id'=>'cidade_mae'])!!}
                <label for="cidade_mae" >Cidade</label> 
            </div>

            <div class="input-field col s12 l4 m4">
                {!!Form::select('estado_mae',['AC'=>'Acre','AL'=>'Alagoas','AP'=>'Amapá','AM'=>'Amazonas','BA'=>'Bahia','CE'=>'Ceará','DF'=>'DistritoFederal','ES'=>'EspiritoSanto','GO'=>'Goiás','MA'=>'Maranhão','MS'=>'MatoGrossodoSul','MT'=>'MatoGrosso','MG'=>'MinasGerais','PA'=>'Pará','PB'=>'Paraíba','PR'=>'Paraná','PE'=>'Pernambuco','PI'=>'Piauí','RJ'=>'RiodeJaneiro','RN'=>'RioGrandedoNorte','RS'=>'RioGrandedoSul','RO'=>'Rondônia','RR'=>'Roraima','SC'=>'SantaCatarina','SP'=>'SãoPaulo','SE'=>'Sergipe','TO'=>'Tocantins'],null,['class'=>'form-control','id'=>'estado_mae'])!!}
                <label for="estado_mae">Estado</label>
            </div>
        </div>
        <h3>Dados da Pai</h3>
        <p>Segundo Passo</p>
        <div class="fa fa-edit"> 
            <div class="col-lg-12"> <hr>
                <div class="input-field col s12 l8 m8">
                    <input type="text" class="form-control" aria-describedby="basic-addon1" name="nome_pai" value="" id="nome_pai">
                    <label for="nome_pai">Pai</label>
                </div>

                <div class="input-field col s12 l4 m4">
                    {!!Form::select('civil_pai',['solteira'=>'Solteira','casada'=>'Casada','separada'=>'Separada'],null,['class'=>'form-control','id'=>'civil_pai'])!!}
                    <label for="civil_pai">Estado civil</label>
                </div>


                <div class="input-field col s4 l4 m4">
                    {!!Form::text('naturalidade_pai',null,['class'=>'form-control','aria-describedby'=>'basic-addon1','id'=>'naturalidade_pai'])!!}
                    <label for="naturalidade_pai">Naturalidade</label>
                </div>

                <div class="input-field col s4 l4 m4">
                    {!!Form::text('nacionalidade_pai',null,['class'=>'form-control','aria-describedby'=>'basic-addon1','id'=>'nacionalidade_pai'])!!}
                    <label for="nacionalidade_pai">Nascionalidade</label>
                </div>

                <div class="input-field col s4 l4 m4">
                    {!!Form::text('cpf_pai',null,['class'=>'form-control','placeholder'=>'CPF','id'=>'cpf_pai'])!!}
                    <label for="cpf_pai">CPF</label>
                </div>
                <div class="input-field col s4 l4 m4">
                    {!!Form::text('grau_pai',null,['class'=>'form-control','aria-describedby'=>'basic-addon1','id'=>'grau_pai'])!!}
                    <label for="contrl">Grau</label>
                </div>
                <div class="input-field col s4 l4 m4">
                    {!!Form::text('profissao_pai',null,['class'=>'form-control',Profissão','aria-describedby'=>'basic-addon1','id'=>'profissao_pai'])!!}
                    <label for="profissao_pai">Profissão</label>
                </div>

                <div class="input-field col s4 l4 m4">
                    {!!Form::email('email_pai',null,['class'=>'form-control','aria-describedby'=>'basic-addon1','id'=>'email_pai'])!!}
                    <label for="email_pai">Email</label>
                </div>

                <div class="form-group col-lg-2">
                    <input name="celular_pai" type="text" class="form-control p" placeholder="( ) -" aria-describedby="basic-addon2" id="celular_pai">
                    <label for="celular_pai">Celular</label>
                </div>

                <div class="input-field col s4 l4 m4">
                    <input type="text" class="form-control" placeholder="CEP" aria-describedby="basic-addon1" name="cep_pai" id="cep_pai" value="">
                    <label for="cep_pai">CEP</label>
                </div>

                <div class="input-field col s4 l4 m4">
                    {!!Form::text('endereco_pai',null,['class'=>'form-control','placeholder'=>'Endereço','aria-describedby'=>'basic-addon1','id'=>'endereco_pai'])!!}
                    <label for="endereco_pai">Endereço</label>
                </div>

                <div class="form-group col-md-2">
                    {!!Form::text('numero_casa_pai',null,['class'=>'form-control','placeholder'=>'numero_casa_pai','aria-describedby'=>'basic-addon1','id'=>'numero_casa_pai'])!!}
                    <label for="numero_casa_pai" >Número</label> 
                </div>

                <div class="input-field col s12 l4 m4">
                    <label for="complemento_pai" >Complemento</label> 
                    {!!Form::text('complemento_pai',null,['class'=>'form-control','placeholder'=>'complemento_pai','aria-describedby'=>'basic-addon1','id'=>'complemento_pai'])!!}

                </div>

                <div class="form-group col-md-6">
                    {!!Form::text('bairro_pai',null,['class'=>'form-control','placeholder'=>'bairro_pai','aria-describedby'=>'basic-addon1','id'=>'bairro_pai'])!!}
                    <label for="bairro_pai" >Bairro</label> 
                </div>

                <div class="input-field col s4 l4 m4">
                    {!!Form::text('cidade_pai',null,['class'=>'form-control','placeholder'=>'cidade_pai','aria-describedby'=>'basic-addon1','id'=>'cidade_pai'])!!}
                    <label for="cidade_pai" >Cidade</label> 
                </div>

                <div class="input-field col s4 l4 m4">
                    {!!Form::select('estado',['AC'=>'Acre','AL'=>'Alagoas','AP'=>'Amapá','AM'=>'Amazonas','BA'=>'Bahia','CE'=>'Ceará','DF'=>'DistritoFederal','ES'=>'EspiritoSanto','GO'=>'Goiás','MA'=>'Maranhão','MS'=>'MatoGrossodoSul','MT'=>'MatoGrosso','MG'=>'MinasGerais','PA'=>'Pará','PB'=>'Paraíba','PR'=>'Paraná','PE'=>'Pernambuco','PI'=>'Piauí','RJ'=>'RiodeJaneiro','RN'=>'RioGrandedoNorte','RS'=>'RioGrandedoSul','RO'=>'Rondônia','RR'=>'Roraima','SC'=>'SantaCatarina','SP'=>'SãoPaulo','SE'=>'Sergipe','TO'=>'Tocantins'],null,['class'=>'input-field','id'=>'estado'])!!}
                    <label for="estado_pai">Estado</label>
                </div>
            </div></div>
        <h3>Dados da Responsavel</h3>
        <p>Segundo Passo</p>
        <!--RESPONSAVEL-->
        <div class="fa fa-edit"> 
            <div class="col-lg-12"> <hr>
                <div class="input-field col s12 l8 m8">
                    <input type="text" class="form-control" aria-describedby="basic-addon1" name="nome_responsavel" value="" id="nome_responsavel">
                    <label for="nome_responsavel">Responsável</label>
                </div>

                <div class="input-field col s12 l4 m4">
                    {!!Form::select('civil',['solteira'=>'Solteira','casada'=>'Casada','separada'=>'Separada'],null,['class'=>'form-control','id'=>'civil_responsavel'])!!}
                    <label for="civil_responsavel" >Estado civil</label>
                </div>

                <div class="input-field col s4 l4 m4">
                    <input type="text" class="form-control" aria-describedby="basic-addon1" name="naturalidade_responsavel" id="naturalidade_responsavel" value="">
                    <label for="naturalidade_responsavel">Naturalidade</label>
                </div>

                <div class="input-field col s4 l4 m4">
                    <input type="text" class="form-control" aria-describedby="basic-addon1" name="nacionalidade_responsavel" id="nacionalidade_responsavel" value="">
                    <label for="nacionalidade_responsavel">Nascionalidade</label>
                </div>

                <div class="input-field col s4 l4 m4">
                    {!!Form::text('cpf',null,['class'=>'form-control','placeholder'=>'CPF','id'=>'cpf_responsavel'])!!}
                    <label for="cpf_responsavel">CPF</label>
                </div>

                <div class="input-field col s4 l4 m4">
                    <input type="text" class="form-control" aria-describedby="basic-addon1" name="grau_responsavel" id="grau_responsavel" value="">
                    <label for="grau_responsavel">Grau</label>
                </div>

                <div class="input-field col s4 l4 m4">
                    {!!Form::text('profissao_contratante',null,['class'=>'form-control','aria-describedby'=>'basic-addon1','id'=>'profissao_contratante'])!!}
                    <label for="profissao_contratante">Profissão</label>
                </div>

                <div class="input-field col s4 l4 m4">
                    <input type="text" class="form-control" placeholder="Email" aria-describedby="basic-addon1" name="email_responsavel" id="email_responsavel" value="">
                    <label for="email_responsavel">Email</label>
                </div>

                <div class="form-group col-lg-2">
                    <input name="celular_responsavel" type="text" class="form-control p" aria-describedby="basic-addon2" id="celular_responsavel">
                    <label for="celular_responsavel">Celular</label> 
                </div>

                <div class="input-field col s4 l4 m4">
                    <input type="text" class="form-control" aria-describedby="basic-addon1" name="cep_responsavel" id="cep_responsavel" value="">
                    <label for="cep_responsavel">CEP</label>
                </div>

                <div class="input-field col s4 l4 m4">
                    {!!Form::text('endereco_responsavel',null,['class'=>'form-control','placeholder'=>'Endereço','aria-describedby'=>'basic-addon1','id'=>'endereco_responsavel'])!!}
                    <label for="endereco_responsavel">Endereço</label>
                </div>

                <div class="form-group col-md-2">
                    {!!Form::text('numero_casa_responsavel',null,['class'=>'form-control','aria-describedby'=>'basic-addon1','id'=>'numero_casa_responsavel'])!!}
                    <label for="numero_casa_responsavel" >Número</label> 
                </div>

                <div class="input-field col s12 l4 m4">
                    {!!Form::text('complemento_responsavel',null,['class'=>'form-control','aria-describedby'=>'basic-addon1','id'=>'complemento_responsavel'])!!}
                    <label for="complemento_responsavel" >Complemento</label> 
                </div>

                <div class="form-group col-md-6">
                    {!!Form::text('bairro_responsavel',null,['class'=>'form-control','placeholder'=>'bairro_responsavel','aria-describedby'=>'basic-addon1','id'=>'bairro_responsavel'])!!}
                    <label for="bairro_responsavel">Bairro</label> 
                </div>

                <div class="input-field col s4 l4 m4">
                    {!!Form::text('cidade_responsavel',null,['class'=>'form-control','placeholder'=>'cidade_responsavel','aria-describedby'=>'basic-addon1','id'=>'cidade_responsavel'])!!}
                    <label for="cidade_responsavel" >Cidade</label> 
                </div>

                <div class="input-field col s12 l4 m4">
                    {!!Form::select('estado',['AC'=>'Acre','AL'=>'Alagoas','AP'=>'Amapá','AM'=>'Amazonas','BA'=>'Bahia','CE'=>'Ceará','DF'=>'DistritoFederal','ES'=>'EspiritoSanto','GO'=>'Goiás','MA'=>'Maranhão','MS'=>'MatoGrossodoSul','MT'=>'MatoGrosso','MG'=>'MinasGerais','PA'=>'Pará','PB'=>'Paraíba','PR'=>'Paraná','PE'=>'Pernambuco','PI'=>'Piauí','RJ'=>'RiodeJaneiro','RN'=>'RioGrandedoNorte','RS'=>'RioGrandedoSul','RO'=>'Rondônia','RR'=>'Roraima','SC'=>'SantaCatarina','SP'=>'SãoPaulo','SE'=>'Sergipe','TO'=>'Tocantins'],null,['class'=>'form-control','id'=>'estado'])!!}
                </div>
            </div>

        </div><!--FIM FORMULÁRIO RESPONSÁVEL-->
    </ul>
    <div class="input-field col s4 l4 m4">
        {!!Form::submit('Enviar',['class'=>'btn btn-primary'])!!}</div>
    {!!Form::close()!!}
</div>
@endsection

@section('scripts')
<script src="{{url("assets/aluno/js/index.js")}}" type="text/javascript"></script>
@endsection