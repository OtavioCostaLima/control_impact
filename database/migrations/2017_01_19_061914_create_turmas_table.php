<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTurmasTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('turmas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('matricula_aluno');
            $table->integer('id_serie');
            $table->string('descricao');
            $table->string('turno');
            $table->string('ano');
            $table->string('numero_chamada');
            $table->foreign('matricula_aluno')->references('matricula')->on('alunos');
            $table->foreign('id_serie')->references('id')->on('series');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('turmas');
    }

}
