@extends('templates.template')

@section('content')
    <div id="wrapper">

        <div id="page-wrapper">
            <div class="container-fluid">
                <section>
                    <div class="wizard">
                        <div class="wizard-inner">
                            <div class="connecting-line"></div>
                            <ul class="nav nav-tabs" role="tablist">

                                <li role="presentation" class="active">
                                    <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Dados do Aluno">
                                        <span class="round-tab">
                                            <i class="glyphicon glyphicon-user"></i>
                                        </span>
                                    </a>
                                </li>

                                <li role="presentation" class="disabled">
                                    <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Questionário">
                                        <span class="round-tab">
                                            <i class="glyphicon glyphicon-pencil"></i>
                                        </span>
                                    </a>
                                </li>

                                <li role="presentation" class="disabled">
                                    <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Concluir">
                                        <span class="round-tab">
                                            <i class="glyphicon glyphicon-ok"></i>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <form role="form" method="post" action="cadastro-professor.php">
                            <div class="tab-content">
                                <div class="tab-pane active" role="tabpanel" id="step1">
                                    <h3>Cadastrar Professor</h3>
                                    <p>Primeiro Passo</p>
                                    <ul class="list-inline pull-right">
                                        <div class="col-lg-12"> 
                                            <!--formulário aluno-->
                                            <div class="form-group col-md-8">
                                                <label class="control-label">Nome Professor</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon glyphicon glyphicon-user" id="basic-addon1"></span>
                                                    <input type="text" class="form-control" placeholder="Nome Professor" aria-describedby="basic-addon1" name="nome_aluno" value="">
                                                </div>
                                            </div>

                                            <div class="form-group col-md-2">
                                                <label class="control-label">Sexo</label>
                                                <div>
                                                    <select name="sexo_aluno" class="form-control">
                                                        <option value="M">
                                                            Masculino
                                                        </option>

                                                        <option value="F">
                                                            Feminino
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group col-md-2">
                                                <label class="control-label">Data Nascimento</label>
                                                <div class="formulario">
                                                    <input name="data_nascimento" type="text" class="form-control col-md-6" id="datepicker1" value="">
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-4">
                                                <label class="control-label">CPF</label>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="CPF" aria-describedby="basic-addon1" name="cpf_responsavel" value="" id="cpf">
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
                                                    <input type="text" class="form-control" placeholder="Profissão" aria-describedby="basic-addon1" name="profissao_responsavel" value="">
                                                </div>
                                            </div>

                                            <div class="form-group col-lg-4">
                                                <label class="control-label">Naturalidade</label>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Naturalidade" aria-describedby="basic-addon1" name="naturalidade_aluno" value="">
                                                </div>
                                            </div>

                                            <div class="form-group col-lg-4">
                                                <label class="control-label">Nascionalidade</label>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Nascionalidade" aria-describedby="basic-addon1" name="nacionalidade_aluno" value="">
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
                                                    <input type="text" class="form-control" placeholder="CEP" aria-describedby="basic-addon1" name="cep_aluno" value="" id="cep">
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-4">
                                                <label class="control-label" >Email</label>
                                                <div class="input-group">
                                                    <input name="email_aluno" type="text" class="form-control" placeholder="Digite seu email" aria-describedby="basic-addon2">
                                                    <span class="input-group-addon glyphicon-envelope" id="basic-addon2"></span>
                                                </div>
                                            </div>

                                            <div class="form-group col-lg-4">
                                                <label class="control-label">Celular</label> 
                                                <div class="form-group">
                                                    <input name="celular_aluno" type="text" id="telefone" class="form-control p" placeholder="( ) -" aria-describedby="basic-addon2">
                                                </div>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label class="control-label">Estado civil</label>
                                                <div>
                                                    <select name="civil" class="form-control">
                                                        <option value="solteira">
                                                            Solteira
                                                        </option>

                                                        <option value="casada">
                                                            Casada
                                                        </option>
                                                        <option value="separada">
                                                            Separada  
                                                        </option>
                                                        <option value="separada">
                                                            Viúva  
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group col-lg-12">
                                                <label class="control-label">Endereço</label>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Endereço" aria-describedby="basic-addon1" name="endereco_aluno" value="">
                                                </div>
                                            </div>

                                            <div class="form-group col-md-2">
                                                <label class="control-label">Número</label> 
                                                <input name="numero_casa_aluno" type="text" class="form-control  pp">
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label class="control-label">Estado</label>

                                                <div>
                                                    <select id="municipio" name="estado_aluno" class="form-control">
                                                        <option value="AC">
                                                            Acre
                                                        </option>

                                                        <option value="AL">
                                                            Alagoas
                                                        </option>

                                                        <option value="AP">
                                                            Amapá
                                                        </option>

                                                        <option value="AM">
                                                            Amazonas
                                                        </option>

                                                        <option value="BA">
                                                            Bahia
                                                        </option>

                                                        <option value="CE">
                                                            Ceará
                                                        </option>

                                                        <option value="DF">
                                                            Distrito Federal
                                                        </option>

                                                        <option value="ES">
                                                            Espirito Santo
                                                        </option>

                                                        <option value="GO">
                                                            Goiás
                                                        </option>

                                                        <option value="MA">
                                                            Maranhão
                                                        </option>

                                                        <option value="MS">
                                                            Mato Grosso do Sul
                                                        </option>

                                                        <option value="MT">
                                                            Mato Grosso
                                                        </option>

                                                        <option value="MG">
                                                            Minas Gerais
                                                        </option>

                                                        <option value="PA">
                                                            Pará
                                                        </option>

                                                        <option value="PB">
                                                            Paraíba
                                                        </option>

                                                        <option value="PR">
                                                            Paraná
                                                        </option>

                                                        <option value="PE">
                                                            Pernambuco
                                                        </option>

                                                        <option value="PI">
                                                            Piauí
                                                        </option>

                                                        <option value="RJ">
                                                            Rio de Janeiro
                                                        </option>

                                                        <option value="RN">
                                                            Rio Grande do Norte
                                                        </option>

                                                        <option value="RS">
                                                            Rio Grande do Sul
                                                        </option>

                                                        <option value="RO">
                                                            Rondônia
                                                        </option>

                                                        <option value="RR">
                                                            Roraima
                                                        </option>

                                                        <option value="SC">
                                                            Santa Catarina
                                                        </option>

                                                        <option value="SP">
                                                            São Paulo
                                                        </option>

                                                        <option value="SE">
                                                            Sergipe
                                                        </option>

                                                        <option value="TO">
                                                            Tocantins
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label class="control-label" for="municipio">Complemento</label> 
                                                <input name="complemento_aluno" type="text" class="form-control  m">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label class="control-label" for="municipio">Bairro</label> 
                                                <label>Bairro</label> <input name="bairro_aluno" type="text" class="form-control p">
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label class="control-label" for="municipio">Cidade</label> 
                                                <label>Cidade</label> <input name="cidade_aluno" type="text" class="form-control  p">
                                            </div>




                                        </div>
                                        <!--fim formulário aluno-->


                                        <li><button type="button" class="btn btn-primary next-step">Próximo Passo</button></li>
                                    </ul>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="step2">
                                    <h3>Dados da Fampilia</h3>
                                    <p>Segundo Passo</p>
                                    <ul class="list-inline pull-right">




                                        <li><button type="button" class="btn btn-default prev-step">Antrior</button></li>
                                        <li><button type="button" class="btn btn-primary next-step">Próximo</button></li>
                                    </ul>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="complete">
                                    <h3>Complete</h3>
                                    <p>You have successfully completed all steps.</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <a href="painel-consultar-alunos.php"><button class="btn btn-primary" type="button">Buscar</button></a>  
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>

@endsection