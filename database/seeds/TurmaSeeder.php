<?php

use Illuminate\Database\Seeder;
use App\Models\Turma;
class TurmaSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Turma::create([
            'matricula_aluno' => '1',
            'id_serie' => 1,
            'descricao' => '1 ano',
            'turno' => 'manhã',
            'ano' => 2016,
            'numero_chamada' => 12,
        ]);
        
        Turma::create([
            'matricula_aluno' => '2',
            'id_serie' => 1,
            'descricao' => '1 ano',
            'turno' => 'manhã',
            'ano' => 2016,
            'numero_chamada' => 12,
        ]);
    }

}
