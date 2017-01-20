<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Horario extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('horarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_disciplina');
            $table->integer('id_turma');
            $table->integer('id_professor');
            $table->foreign('id_disciplina')->references('id')->on('disciplinas');
            $table->foreign('id_turma')->references('id')->on('turmas');
            $table->foreign('id_professor')->references('id')->on('professors');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('horarios');
    }

}
