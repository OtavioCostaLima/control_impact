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
        Schema::create('aluno_series', function (Blueprint $table) {
            $table->string('matricula_aluno', 20);
            $table->integer('id_serie');
            $table->string('descricao', 10);
            $table->string('turno', 10);
            $table->string('ano', 4);
            $table->integer('numero_chamada',3);
            $table->foreign('matricula_aluno')->references('matricula')->on('alunos')->onDelete('cascade');
            $table->foreign('id_serie')->references('id')->on('series')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('aluno_series');
    }

}
