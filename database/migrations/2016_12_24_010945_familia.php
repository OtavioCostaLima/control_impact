<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Familia extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('familias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_pai');
            $table->string('nome_mae');
            $table->string('estado_civil_mae');
            $table->string('estado_civil_pai');
            $table->string('nacionalidade_mae');
            $table->string('nacionalidade_pai');
            $table->string('cpf_mae', 11);
            $table->string('cpf_pai', 11);
            $table->string('grau_mae');
            $table->string('grau_pai');
            $table->string('naturalidade_mae');
            $table->string('naturalidade_pai');
            $table->string('profissao_mae');
            $table->string('profissao_pai');
            $table->string('rua_mae');
            $table->string('rua_pai');
            $table->string('numero_residencia_mae');
            $table->string('numero_residencia_pai');
            $table->string('bairro_mae');
            $table->string('bairro_pai');
            $table->string('cep_mae');
            $table->string('cep_pai');
            $table->string('celular_mae');
            $table->string('celular_pai');
            $table->string('cidade_mae');
            $table->string('cidade_pai');
            $table->string('uf_mae', 2);
            $table->string('uf_pai', 2);
            $table->string('email_mae');
            $table->string('email_pai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('familias');
    }

}
