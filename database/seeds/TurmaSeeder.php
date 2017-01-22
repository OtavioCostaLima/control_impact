<?php

use Illuminate\Database\Seeder;

class TurmaSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        \App\Models\Turma::create([
            'matricula_aluno' => '1',
            'id_serie' => 1,
            'descricao' => '1 ano',
            'turno' => 'manhã',
            'ano' => 2016,
            'numero_chamada' => 12,
        ]);
    }

}
