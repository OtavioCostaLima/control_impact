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
        Schema::create('serie', function (Blueprint $table) {
            $table->bigIncrements('id');
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
        Schema::dropIfExists('serie');
    }

}
