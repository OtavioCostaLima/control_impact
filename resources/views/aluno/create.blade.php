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
        <div class="col-lg-12"> 
            <!--formulário aluno-->
            <div class="form-group col-md-8">
                <label class="control-label">Nome Aluno</label>
                <div class="input-group">
                    <span class="input-group-addon glyphicon glyphicon-user" id="basic-addon1"></span>
                    {!!Form::text('nome_aluno',null,['class'=>'form-control','placeholder'=>'Nome do Aluno','aria-describedby'=>'basic-addon1'])!!}
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
                <div class="formulario input-group">
                    {!!Form::date('data_nascimento',null,['class'=>'form-control col-md-6'])!!}
                </div>
            </div>


            <div class="form-group col-lg-4">
                <label class="control-label">Naturalidade</label>
                <div class="form-group">
                    {!!Form::text('naturalidade',null,['class'=>'form-control','placeholder'=>'Naturalidade','aria-describedby'=>'basic-addon1'])!!}
                </div>
            </div>

            <div class="form-group col-lg-4">
                <label class="control-label">Nascionalidade</label>
                <div class="form-group">
                    {!!Form::text('nacionalidade',null,['class'=>'form-control','placeholder'=>'Nacionalidade','aria-describedby'=>'basic-addon1'])!!}
                </div>
            </div>

            <div class="form-group col-lg-4">
                <label class="control-label">Certidão</label>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Certidão" aria-describedby="basic-addon1" name="certidao" value="" required>
                </div>
            </div>
            <div class="form-group col-lg-3">
                <label class="control-label">Termo</label>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Termo" aria-describedby="basic-addon1" name="termo" value="" required>
                </div>
            </div>
            <div class="form-group col-lg-3">
                <label class="control-label">Folha</label>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Folha" aria-describedby="basic-addon1" name="folha" value="" required>
                </div>
            </div>
            <div class="form-group col-lg-3" for="livro">
                <label class="control-label">Livro</label>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Livro" aria-describedby="basic-addon1" name="livro" value="" required>
                </div>
            </div>

            <div class="form-group col-md-3">
                <label class="control-label">Data Emissão</label>
                <div class="formulario">
                    <input name="data_emissao" type="text" class="form-control col-md-6" id="data" value="" required>
                </div>
            </div>

            <div class="form-group col-lg-4">
                <label class="control-label">Cartório</label>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Cartório" aria-describedby="basic-addon1" name="cartorio" value="" required>
                </div>
            </div>

            <div class="form-group col-lg-4">
                <label class="control-label" >Email</label>
                <div class="input-group">
                    <input name="email_aluno" type="text" class="form-control" placeholder="Digite seu email" aria-describedby="basic-addon2" required>
                    <span class="input-group-addon glyphicon-envelope" id="basic-addon2"></span>
                </div>
            </div>

            <div class="form-group col-lg-4">
                <label class="control-label">Celular</label> 
                <div class="form-group">
                    <input name="celular_aluno" type="text" id="telefone" class="form-control p" placeholder="( ) -" aria-describedby="basic-addon2" required>
                </div>
            </div>

            <div class="form-group col-lg-4">
                <label class="control-label" >CEP</label>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="CEP" aria-describedby="basic-addon1" name="cep_aluno" value="" id="cep" required>
                </div>
            </div>

            <div class="form-group col-lg-6">
                <label class="control-label">Endereço</label>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Endereço" aria-describedby="basic-addon1" name="endereco_aluno" value="" required>
                </div>
            </div>

            <div class="form-group col-md-2">
                <label class="control-label">Número</label> 
                <input name="numero_casa_aluno" type="text" class="form-control  pp" required>
            </div>

            <div class="form-group col-md-6">
                <label class="control-label" for="municipio">Complemento</label> 
                <input name="complemento_aluno" type="text" class="form-control  m" required>
            </div>

            <div class="form-group col-md-6">
                <label class="control-label" for="municipio">Bairro</label> 
                <label>Bairro</label> <input name="bairro_aluno" type="text" class="form-control p" required>
            </div>

            <div class="form-group col-lg-8">
                <label class="control-label" for="municipio">Cidade</label> 
                <label>Cidade</label> 
                <input name="cidade_aluno" type="text" class="form-control  p" required> 
            </div>



            <div class="form-group col-md-4">
                <label class="control-label">Estado</label>
                {!!Form::select('estado',['AC'=>'Acre','AL'=>'Alagoas','AP'=>'Amapá','AM'=>'Amazonas','BA'=>'Bahia','CE'=>'Ceará','DF'=>'DistritoFederal','ES'=>'EspiritoSanto','GO'=>'Goiás','MA'=>'Maranhão','MS'=>'MatoGrossodoSul','MT'=>'MatoGrosso','MG'=>'MinasGerais','PA'=>'Pará','PB'=>'Paraíba','PR'=>'Paraná','PE'=>'Pernambuco','PI'=>'Piauí','RJ'=>'RiodeJaneiro','RN'=>'RioGrandedoNorte','RS'=>'RioGrandedoSul','RO'=>'Rondônia','RR'=>'Roraima','SC'=>'SantaCatarina','SP'=>'SãoPaulo','SE'=>'Sergipe','TO'=>'Tocantins'],null,['class'=>'form-control'])!!}
            </div>
        </div>
        <!--fim formulário aluno-->
    </ul>


    <h3>Dados da Fampilia</h3>
    <p>Segundo Passo</p>
    <ul class="list-inline pull-right">
        <!-- formulário mae-->
        <div class="col-lg-12"> 
            <div class="form-group col-md-8">
                <label class="control-label">Mãe</label>
                <div class="input-group">
                    <span class="input-group-addon glyphicon glyphicon-user" id="basic-addon1"></span>
                    {!!Form::text('nome_mae',null,['class'=>'form-control','placeholder'=>'Mãe','aria-describedby'=>'basic-addon1'])!!}
                </div>
            </div>

            <div class="form-group col-md-4">
                <label class="control-label">Estado civil</label>
                <div>
                    {!!Form::select('civil',['solteira'=>'Solteira','casada'=>'Casada','separada'=>'Separada'],null,['class'=>'form-control'])!!}
                </div>
            </div>


            <div class="form-group col-lg-4">
                <label class="control-label">Naturalidade</label>
                <div class="form-group">
                    {!!Form::text('naturalidade',null,['class'=>'form-control','placeholder'=>'Naturalidade','aria-describedby'=>'basic-addon1'])!!}
                </div>
            </div>

            <div class="form-group col-lg-4">
                <label class="control-label">Nascionalidade</label>
                <div class="form-group">
                    {!!Form::text('nacionalidade_mae',null,['class'=>'form-control','placeholder'=>'Nascionalidade','aria-describedby'=>'basic-addon1'])!!}
                </div>
            </div>

            <div class="form-group col-lg-4">
                <label class="control-label">CPF</label>
                <div class="form-group">
                    {!!Form::text('cpf_mae',null,['class'=>'form-control','placeholder'=>'CPF'])!!}
                </div>
            </div>
            <div class="form-group col-lg-4">
                <label class="control-label">Grau</label>
                <div class="form-group">
                    {!!Form::text('grau_mae',null,['class'=>'form-control','placeholder'=>'Grau','aria-describedby'=>'basic-addon1'])!!}
                </div>
            </div>
            <div class="form-group col-lg-4">
                <label class="control-label">Profissão</label>
                <div class="form-group">
                    {!!Form::text('profissao_mae',null,['class'=>'form-control','placeholder'=>'Profissão','aria-describedby'=>'basic-addon1'])!!}
                </div>
            </div>


            <div class="form-group col-lg-4">
                <label class="control-label">Email</label>
                <div class="form-group">
                    {!!Form::email('email_pai',null,['class'=>'form-control','placeholder'=>'Email','aria-describedby'=>'basic-addon1'])!!}
                </div>
            </div>

            <div class="form-group col-lg-2">
                <label class="control-label">Celular</label> 
                <div class="form-group">
                    <input name="celular_mae" type="text" class="form-control p" placeholder="( ) -" aria-describedby="basic-addon2">
                </div>
            </div>

            <div class="form-group col-lg-4">
                <label class="control-label">CEP</label>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="CEP" aria-describedby="basic-addon1" name="cep_mae" value="">
                </div>
            </div>

            <div class="form-group col-lg-6">
                <label class="control-label">Endereço</label>
                <div class="form-group">
                    {!!Form::text('endereco_responsavel',null,['class'=>'form-control','placeholder'=>'Endereço','aria-describedby'=>'basic-addon1'])!!}
                </div>
            </div>

            <div class="form-group col-md-2">
                <label class="control-label" for="">Número</label> 
                {!!Form::text('numero_casa_responsavel',null,['class'=>'form-control','placeholder'=>'numero_casa_responsavel','aria-describedby'=>'basic-addon1'])!!}


            </div>

            <div class="form-group col-md-4">
                <label class="control-label" for="">Complemento</label> 
                {!!Form::text('complemento_responsavel',null,['class'=>'form-control','placeholder'=>'complemento_responsavel','aria-describedby'=>'basic-addon1'])!!}

            </div>

            <div class="form-group col-md-6">
                <label class="control-label" for="">Bairro</label> 
                <label>Bairro</label>
                {!!Form::text('bairro_responsavel',null,['class'=>'form-control','placeholder'=>'bairro_responsavel','aria-describedby'=>'basic-addon1'])!!}
            </div>

            <div class="form-group col-lg-6">
                <label class="control-label" for="">Cidade</label> 
                <label>Cidade</label> 
                {!!Form::text('cidade_responsavel',null,['class'=>'form-control','placeholder'=>'cidade_responsavel','aria-describedby'=>'basic-addon1'])!!}

            </div>

            <div class="form-group col-md-4">
                <label class="control-label">Estado</label>
                {!!Form::select('estado',['AC'=>'Acre','AL'=>'Alagoas','AP'=>'Amapá','AM'=>'Amazonas','BA'=>'Bahia','CE'=>'Ceará','DF'=>'DistritoFederal','ES'=>'EspiritoSanto','GO'=>'Goiás','MA'=>'Maranhão','MS'=>'MatoGrossodoSul','MT'=>'MatoGrosso','MG'=>'MinasGerais','PA'=>'Pará','PB'=>'Paraíba','PR'=>'Paraná','PE'=>'Pernambuco','PI'=>'Piauí','RJ'=>'RiodeJaneiro','RN'=>'RioGrandedoNorte','RS'=>'RioGrandedoSul','RO'=>'Rondônia','RR'=>'Roraima','SC'=>'SantaCatarina','SP'=>'SãoPaulo','SE'=>'Sergipe','TO'=>'Tocantins'],null,['class'=>'form-control'])!!}
            </div>
        </div>

        <div class="fa fa-edit"> 
            <div class="col-lg-12"> <hr>
                <div class="form-group col-md-8">
                    <label class="control-label">Pai</label>
                    <div class="input-group">
                        <span class="input-group-addon glyphicon glyphicon-user" id="basic-addon1"></span>
                        <input type="text" class="form-control" placeholder="Pai" aria-describedby="basic-addon1" name="nome_pai" value="">
                    </div>
                </div>

                <div class="form-group col-md-4">
                    <label class="control-label">Estado civil</label>
                    <div>
                        {!!Form::select('civil',['solteira'=>'Solteira','casada'=>'Casada','separada'=>'Separada'],null,['class'=>'form-control'])!!}
                    </div>
                </div>


                <div class="form-group col-lg-4">
                    <label class="control-label">Naturalidade</label>
                    <div class="form-group">
                        {!!Form::text('naturalidade',null,['class'=>'form-control','placeholder'=>'Naturalidade','aria-describedby'=>'basic-addon1'])!!}
                    </div>
                </div>

                <div class="form-group col-lg-4">
                    <label class="control-label">Nascionalidade</label>
                    <div class="form-group">
                        {!!Form::text('nacionalidade_pai',null,['class'=>'form-control','placeholder'=>'Nascionalidade','aria-describedby'=>'basic-addon1'])!!}
                    </div>
                </div>

                <div class="form-group col-lg-4">
                    <label class="control-label">CPF</label>
                    <div class="form-group">
                        {!!Form::text('cpf_pai',null,['class'=>'form-control','placeholder'=>'CPF'])!!}
                    </div>
                </div>
                <div class="form-group col-lg-4">
                    <label class="control-label">Grau</label>
                    <div class="form-group">
                        {!!Form::text('grau_pai',null,['class'=>'form-control','placeholder'=>'Grau','aria-describedby'=>'basic-addon1'])!!}

                    </div>
                </div>
                <div class="form-group col-lg-4">
                    <label class="control-label">Profissão</label>
                    <div class="form-group">
                        {!!Form::text('profissao_pai',null,['class'=>'form-control','placeholder'=>'Profissão','aria-describedby'=>'basic-addon1'])!!}
                    </div>
                </div>


                <div class="form-group col-lg-4">
                    <label class="control-label">Email</label>
                    <div class="form-group">
                        {!!Form::email('email_pai',null,['class'=>'form-control','placeholder'=>'Email','aria-describedby'=>'basic-addon1'])!!}
                    </div>
                </div>

                <div class="form-group col-lg-2">
                    <label class="control-label">Celular</label> 
                    <div class="form-group">
                        <input name="celular_pai" type="text" class="form-control p" placeholder="( ) -" aria-describedby="basic-addon2">
                    </div>
                </div>

                <div class="form-group col-lg-4">
                    <label class="control-label">CEP</label>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="CEP" aria-describedby="basic-addon1" name="cep_pai" value="">
                    </div>
                </div>

                <div class="form-group col-lg-6">
                    <label class="control-label">Endereço</label>
                    <div class="form-group">
                        {!!Form::text('endereco_responsavel',null,['class'=>'form-control','placeholder'=>'Endereço','aria-describedby'=>'basic-addon1'])!!}
                    </div>
                </div>

                <div class="form-group col-md-2">
                    <label class="control-label" for="">Número</label> 
                    {!!Form::text('numero_casa_responsavel',null,['class'=>'form-control','placeholder'=>'numero_casa_responsavel','aria-describedby'=>'basic-addon1'])!!}
                </div>

                <div class="form-group col-md-4">
                    <label class="control-label" for="">Complemento</label> 
                    {!!Form::text('complemento_responsavel',null,['class'=>'form-control','placeholder'=>'complemento_responsavel','aria-describedby'=>'basic-addon1'])!!}

                </div>

                <div class="form-group col-md-6">
                    <label class="control-label" for="">Bairro</label> 
                    <label>Bairro</label>
                    {!!Form::text('bairro_responsavel',null,['class'=>'form-control','placeholder'=>'bairro_responsavel','aria-describedby'=>'basic-addon1'])!!}
                </div>

                <div class="form-group col-lg-6">
                    <label class="control-label" for="">Cidade</label> 
                    <label>Cidade</label> 
                    {!!Form::text('cidade_responsavel',null,['class'=>'form-control','placeholder'=>'cidade_responsavel','aria-describedby'=>'basic-addon1'])!!}

                </div>



                <div class="form-group col-md-4">
                    <label class="control-label">Estado</label>
                    {!!Form::select('estado',['AC'=>'Acre','AL'=>'Alagoas','AP'=>'Amapá','AM'=>'Amazonas','BA'=>'Bahia','CE'=>'Ceará','DF'=>'DistritoFederal','ES'=>'EspiritoSanto','GO'=>'Goiás','MA'=>'Maranhão','MS'=>'MatoGrossodoSul','MT'=>'MatoGrosso','MG'=>'MinasGerais','PA'=>'Pará','PB'=>'Paraíba','PR'=>'Paraná','PE'=>'Pernambuco','PI'=>'Piauí','RJ'=>'RiodeJaneiro','RN'=>'RioGrandedoNorte','RS'=>'RioGrandedoSul','RO'=>'Rondônia','RR'=>'Roraima','SC'=>'SantaCatarina','SP'=>'SãoPaulo','SE'=>'Sergipe','TO'=>'Tocantins'],null,['class'=>'form-control'])!!}
                </div>
            </div></div>
        <!--RESPONSAVEL-->
        <div class="fa fa-edit"> 
            <div class="col-lg-12"> <hr>
                <div class="form-group col-md-8">
                    <label class="control-label">Responsável</label>
                    <div class="input-group">
                        <span class="input-group-addon glyphicon glyphicon-user" id="basic-addon1"></span>
                        <input type="text" class="form-control" placeholder="Responsável" aria-describedby="basic-addon1" name="nome_responsavel" value="">
                    </div>
                </div>

                <div class="form-group col-md-4">
                    <label class="control-label">Estado civil</label>
                    <div>
                        {!!Form::select('civil',['solteira'=>'Solteira','casada'=>'Casada','separada'=>'Separada'],null,['class'=>'form-control'])!!}
                    </div>
                </div>


                <div class="form-group col-lg-4">
                    <label class="control-label">Naturalidade</label>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Naturalidade" aria-describedby="basic-addon1" name="naturalidade_responsavel" value="">
                    </div>
                </div>

                <div class="form-group col-lg-4">
                    <label class="control-label">Nascionalidade</label>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nascionalidade" aria-describedby="basic-addon1" name="nacionalidade_responsavel" value="">
                    </div>
                </div>

                <div class="form-group col-lg-4">
                    <label class="control-label">CPF</label>
                    <div class="form-group">
                        {!!Form::text('cpf',null,['class'=>'form-control','placeholder'=>'CPF'])!!}
                    </div>
                </div>
                <div class="form-group col-lg-4">
                    <label class="control-label">Grau</label>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Grau" aria-describedby="basic-addon1" name="grau_responsavel" value="">
                    </div>
                </div>
                <div class="form-group col-lg-4">
                    <label class="control-label">Profissão</label>
                    <div class="form-group">
                        {!!Form::text('profissao_contratante',null,['class'=>'form-control','placeholder'=>'Profissão','aria-describedby'=>'basic-addon1'])!!}
                    </div>
                </div>


                <div class="form-group col-lg-4">
                    <label class="control-label">Email</label>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email" aria-describedby="basic-addon1" name="email_responsavel" value="">
                    </div>
                </div>

                <div class="form-group col-lg-2">
                    <label class="control-label">Celular</label> 
                    <div class="form-group">
                        <input name="celular_responsavel" type="text" class="form-control p" placeholder="( ) -" aria-describedby="basic-addon2">
                    </div>
                </div>

                <div class="form-group col-lg-4">
                    <label class="control-label">CEP</label>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="CEP" aria-describedby="basic-addon1" name="cep_responsavel" value="">
                    </div>
                </div>

                <div class="form-group col-lg-6">
                    <label class="control-label">Endereço</label>
                    <div class="form-group">
                        {!!Form::text('endereco_responsavel',null,['class'=>'form-control','placeholder'=>'Endereço','aria-describedby'=>'basic-addon1'])!!}
                    </div>
                </div>

                <div class="form-group col-md-2">
                    <label class="control-label" for="">Número</label> 
                    {!!Form::text('numero_casa_responsavel',null,['class'=>'form-control','placeholder'=>'numero_casa_responsavel','aria-describedby'=>'basic-addon1'])!!}


                </div>

                <div class="form-group col-md-4">
                    <label class="control-label" for="">Complemento</label> 
                    {!!Form::text('complemento_responsavel',null,['class'=>'form-control','placeholder'=>'complemento_responsavel','aria-describedby'=>'basic-addon1'])!!}

                </div>

                <div class="form-group col-md-6">
                    <label class="control-label" for="">Bairro</label> 
                    <label>Bairro</label>
                    {!!Form::text('bairro_responsavel',null,['class'=>'form-control','placeholder'=>'bairro_responsavel','aria-describedby'=>'basic-addon1'])!!}
                </div>

                <div class="form-group col-lg-6">
                    <label class="control-label" for="">Cidade</label> 
                    <label>Cidade</label> 
                    {!!Form::text('cidade_responsavel',null,['class'=>'form-control','placeholder'=>'cidade_responsavel','aria-describedby'=>'basic-addon1'])!!}

                </div>

                <div class="form-group col-md-4">
                    <label class="control-label">Estado</label>
                    {!!Form::select('estado',['AC'=>'Acre','AL'=>'Alagoas','AP'=>'Amapá','AM'=>'Amazonas','BA'=>'Bahia','CE'=>'Ceará','DF'=>'DistritoFederal','ES'=>'EspiritoSanto','GO'=>'Goiás','MA'=>'Maranhão','MS'=>'MatoGrossodoSul','MT'=>'MatoGrosso','MG'=>'MinasGerais','PA'=>'Pará','PB'=>'Paraíba','PR'=>'Paraná','PE'=>'Pernambuco','PI'=>'Piauí','RJ'=>'RiodeJaneiro','RN'=>'RioGrandedoNorte','RS'=>'RioGrandedoSul','RO'=>'Rondônia','RR'=>'Roraima','SC'=>'SantaCatarina','SP'=>'SãoPaulo','SE'=>'Sergipe','TO'=>'Tocantins'],null,['class'=>'form-control'])!!}
                </div>
            </div></div><!--FIM FORMULÁRIO RESPONSÁVEL-->
    </ul>
    <div class="form-group col-lg-6">
        {!!Form::submit('Enviar',['class'=>'btn btn-primary'])!!}</div>
    {!!Form::close()!!}
</div>
@endsection