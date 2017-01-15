<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Contrato extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('contrato', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_contrato');
            $table->integer('id_contratante');
            $table->string('matricula_aluno');
            $table->date('data_contrato');
            $table->date('data_renovacao');
            $table->foreign('matricula_aluno')->references('matricula')->on('aluno')->onDelete('cascade');
            $table->foreign('id_contratante')->references('id')->on('contratante')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('contrato');
    }

}
