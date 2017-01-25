<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Contratante extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('contratantes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('filiacao');
            $table->string('cpf');
            $table->string('rg');
            $table->string('orgao_expeditor');
            $table->string('nacionalidade');
            $table->string('naturalidade');
            $table->string('rua');
            $table->string('numero');
            $table->string('bairro');
            $table->string('uf');
            $table->string('cep');
            $table->string('cidade');
            $table->string('telefone');
            $table->string('celular');
            $table->string('email');
            $table->string('profissao');
            $table->string('local_trabalho');
            $table->string('endereco_profissional');
            $table->string('numero_endereco_profissional');
            $table->string('telefone_comercial');
            $table->string('grau_parentesco_aluno');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('contratantes');
    }

}
