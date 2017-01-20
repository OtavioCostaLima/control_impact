<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Professor extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('professors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');             $table->string('cpf')->unique();
            $table->string('bairro');           $table->string('sexo');         
            $table->string('ctps');             $table->date('data_emissao');
            $table->date('data_nascimento');    $table->string('estadoCivil');
            $table->string('grauInstrucao');    $table->string('numero_residencia');
            $table->string('orgaoEmissor');     $table->string('pisPasep');
            $table->string('posGraduacao');     $table->string('citade');
            $table->string('raca');             $table->string('grau'); 
            $table->string('rg');
            $table->string('rua');
            $table->string('secao');
            $table->string('serie');
            $table->string('situacao');
            $table->string('tituloDeEleitor');
            $table->string('uf');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('professors');
    }

}
