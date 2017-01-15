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
        Schema::create('horario', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_disciplina');
            $table->integer('id_serie');
            $table->integer('id_professor');
            $table->foreign('id_disciplina')->references('id')->on('disciplina');
            $table->foreign('id_serie')->references('id')->on('serie');
            $table->foreign('id_professor')->references('id')->on('professor');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('horario');
    }

}
