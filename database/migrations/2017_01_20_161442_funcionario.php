<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Funcionario extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('cpf');
            $table->string('rg');
            $table->string('orgao_expeditor');
            $table->string('nascionalidade');
            $table->string('endereco');
            $table->string('numero');
            $table->string('bairro');
            $table->string('cep');
            $table->string('cidade');
            $table->string('telefone');
            $table->string('celular');
            $table->string('email');
            $table->string('profissao');
            $table->string('endereco_profissional');
            $table->string('numero_endereco_profissional');
            $table->string('telefone_comercial');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('funcionarios');
    }

}
