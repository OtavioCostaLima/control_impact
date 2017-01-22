@extends('templates.template')

@section('content')
<div class="container-fluid">
<form role="form" method="post" action="cadastro.php" id="formAluno"  data-toggle="validator">

    <h3>Cadastrar Aluno</h3>
    <p>Primeiro Passo</p>
    <ul class="list-inline pull-right">
        <div class="col-lg-12"> 
            <!--formulário aluno-->
            <div class="form-group col-md-8">
                <label class="control-label">Nome Aluno</label>
                <div class="input-group">
                    <span class="input-group-addon glyphicon glyphicon-user" id="basic-addon1"></span>
                    <input type="text" class="form-control" placeholder="Nome do Aluno" aria-describedby="basic-addon1" name="nome_aluno" required>
                </div>
            </div>

            <div class="form-group col-md-2">
                <label class="control-label">Sexo</label>
                <div>
                    <select name="sexo_aluno" class="form-control" required>
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
                <div class="formulario input-group">
                    <input name="data_nascimento" type="text" class="form-control col-md-6" id="datepicker1" value="" required>
                </div>
            </div>


            <div class="form-group col-lg-4">
                <label class="control-label">Naturalidade</label>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Naturalidade" aria-describedby="basic-addon1" name="naturalidade_aluno" value="" required>
                </div>
            </div>

            <div class="form-group col-lg-4">
                <label class="control-label">Nascionalidade</label>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nascionalidade" aria-describedby="basic-addon1" name="nacionalidade_aluno" value="" required>
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
                <label>Cidade</label> <input name="cidade_aluno" type="text" class="form-control  p" required> 
            </div>



            <div class="form-group col-md-4">
                <label class="control-label">Estado</label>

                <div>
                    <select id="municipio" name="estado_aluno" class="form-control" required>
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
                    <input type="text" class="form-control" placeholder="Mãe" aria-describedby="basic-addon1" name="nome_mae" value="" required>
                </div>
            </div>

            <div class="form-group col-md-4">
                <label class="control-label">Estado civil</label>
                <div>
                    <select name="civil_mae" class="form-control" required>
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


            <div class="form-group col-lg-4">
                <label class="control-label">Naturalidade</label>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Naturalidade" aria-describedby="basic-addon1" name="naturalidade_mae" value="" required>
                </div>
            </div>

            <div class="form-group col-lg-4">
                <label class="control-label">Nascionalidade</label>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nascionalidade" aria-describedby="basic-addon1" name="nacionalidade_mae" value="" required>
                </div>
            </div>

            <div class="form-group col-lg-4">
                <label class="control-label">CPF</label>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="CPF" aria-describedby="basic-addon1" name="cpf_mae" value="" id="cpf" required>
                </div>
            </div>
            <div class="form-group col-lg-4">
                <label class="control-label">Grau</label>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Grau" aria-describedby="basic-addon1" name="grau_mae" value="" required >
                </div>
            </div>
            <div class="form-group col-lg-4">
                <label class="control-label">Profissão</label>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Profissão" aria-describedby="basic-addon1" name="profissao_mae" value="">
                </div>
            </div>


            <div class="form-group col-lg-4">
                <label class="control-label">Email</label>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Email" aria-describedby="basic-addon1" name="email_mae" value="">
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
                    <input type="text" class="form-control" placeholder="Endereço" aria-describedby="basic-addon1" name="endereco_mae" value="">
                </div>
            </div>

            <div class="form-group col-md-2">
                <label class="control-label" for="municipio">Número</label> 
                <input name="numero_casa_mae" type="text" class="form-control  pp">
            </div>

            <div class="form-group col-md-4">
                <label class="control-label" for="municipio">Complemento</label> 
                <input name="complemento_mae" type="text" class="form-control  m">
            </div>

            <div class="form-group col-md-6">
                <label class="control-label" for="municipio">Bairro</label> 
                <label>Bairro</label> <input name="bairro_mae" type="text" class="form-control p">
            </div>

            <div class="form-group col-lg-6">
                <label class="control-label" for="municipio">Cidade</label> 
                <label>Cidade</label> <input name="cidade_mae" type="text" class="form-control  p">
            </div>



            <div class="form-group col-md-4">
                <label class="control-label">Estado</label>

                <div>
                    <select id="municipio" name="estado_mae" class="form-control">
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
                        <select name="civil_pai" class="form-control">
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


                <div class="form-group col-lg-4">
                    <label class="control-label">Naturalidade</label>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Naturalidade" aria-describedby="basic-addon1" name="naturalidade_pai" value="">
                    </div>
                </div>

                <div class="form-group col-lg-4">
                    <label class="control-label">Nascionalidade</label>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nascionalidade" aria-describedby="basic-addon1" name="nacionalidade_pai" value="">
                    </div>
                </div>

                <div class="form-group col-lg-4">
                    <label class="control-label">CPF</label>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="CPF" aria-describedby="basic-addon1" name="cpf_pai" value="" id="cpf">
                    </div>
                </div>
                <div class="form-group col-lg-4">
                    <label class="control-label">Grau</label>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Grau" aria-describedby="basic-addon1" name="grau_pai" value="">
                    </div>
                </div>
                <div class="form-group col-lg-4">
                    <label class="control-label">Profissão</label>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Profissão" aria-describedby="basic-addon1" name="profissao_pai" value="">
                    </div>
                </div>


                <div class="form-group col-lg-4">
                    <label class="control-label">Email</label>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email" aria-describedby="basic-addon1" name="email_pai" value="">
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
                        <input type="text" class="form-control" placeholder="Endereço" aria-describedby="basic-addon1" name="endereco_pai" value="">
                    </div>
                </div>

                <div class="form-group col-md-2">
                    <label class="control-label" for="municipio">Número</label> 
                    <input name="numero_casa_pai" type="text" class="form-control  pp">
                </div>

                <div class="form-group col-md-4">
                    <label class="control-label" for="municipio">Complemento</label> 
                    <input name="complemento_pai" type="text" class="form-control  m">
                </div>

                <div class="form-group col-md-6">
                    <label class="control-label" for="municipio">Bairro</label> 
                    <label>Bairro</label> <input name="bairro_pai" type="text" class="form-control p">
                </div>

                <div class="form-group col-lg-6">
                    <label class="control-label" for="municipio">Cidade</label> 
                    <label>Cidade</label> <input name="cidade_pai" type="text" class="form-control  p">
                </div>



                <div class="form-group col-md-4">
                    <label class="control-label">Estado</label>

                    <div>
                        <select id="municipio" name="estado_pai" class="form-control">
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
                        <input type="text" class="form-control" placeholder="Endereço" aria-describedby="basic-addon1" name="endereco_responsavel" value="">
                    </div>
                </div>

                <div class="form-group col-md-2">
                    <label class="control-label" for="municipio">Número</label> 
                    <input name="numero_casa_responsavel" type="text" class="form-control  pp">
                </div>

                <div class="form-group col-md-4">
                    <label class="control-label" for="municipio">Complemento</label> 
                    <input name="complemento_responsavel" type="text" class="form-control  m">
                </div>

                <div class="form-group col-md-6">
                    <label class="control-label" for="municipio">Bairro</label> 
                    <label>Bairro</label> <input name="bairro_responsavel" type="text" class="form-control p">
                </div>

                <div class="form-group col-lg-6">
                    <label class="control-label" for="municipio">Cidade</label> 
                    <label>Cidade</label> <input name="cidade_responsavel" type="text" class="form-control  p">
                </div>



                <div class="form-group col-md-4">
                    <label class="control-label">Estado</label>

                    <div>
                        <select id="municipio" name="estado_responsavel" class="form-control">
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
            </div></div><!--FIM FORMULÁRIO RESPONSÁVEL-->
    </ul>
    <a href="painel-consultar-alunos.php"><button class="btn btn-primary" type="button">Enviar</button></a>  
</form>
</div>
@endsection