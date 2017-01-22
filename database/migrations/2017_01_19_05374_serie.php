<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Serie extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        self::down();
        Schema::create('series', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('tipo', ['Jardim', 'Fundamental', 'Médio']);
            $table->string('descricao', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('series');
    }

}
