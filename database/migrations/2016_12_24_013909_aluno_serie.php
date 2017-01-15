<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlunoSerie extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        self::down();
        Schema::create('aluno_serie', function (Blueprint $table) {
            $table->string('matricula_aluno', 20);
            $table->integer('id_serie');
            $table->string('turno',10);
            $table->string('ano',4);
            $table->foreign('matricula_aluno')->references('matricula')->on('aluno')->onDelete('cascade');
            $table->foreign('id_serie')->references('id')->on('serie')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('aluno_serie');
    }

}
