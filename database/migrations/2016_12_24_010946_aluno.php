<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Aluno extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        Schema::create('alunos', function (Blueprint $table) {
            $table->string('matricula', 20)->unique()->primary();
            $table->integer('id_familia');
            $table->string('nome', 300);
            $table->date('data_nascimento');
            $table->string('sexo');
            $table->string('bairro');
            $table->string('celular');
            $table->string('cep');
            $table->string('uf');
            $table->string('cidade');
            $table->string('cor');
            $table->string('data_emissao');
            $table->string('email');
            $table->string('folha');
            $table->string('livro');
            $table->string('nacionalidade');
            $table->string('numero_residencia');
            $table->string('registro_nascimento');
            $table->string('rua');
            $table->string('status');
            $table->string('telefone');
            $table->foreign('id_familia')->references('id')->on('familias');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('alunos');
    }

}
