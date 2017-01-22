<?php

use Illuminate\Database\Seeder;

class SerieSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        \App\Models\Serie::create([
            'tipo' => 'Jardim',
            'descricao' => 1,
        ]);
    }

}
