<?php

use Illuminate\Database\Seeder;
use App\Models\Aluno;

class AlunoSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Aluno::insert([
            'matricula' => '1', 
            'id_familia' => 1, 
            'nome' => 'OTAVIO COSTA', 
            'data_nascimento' => '2015-01-01',
            'sexo' => str_random(2), 
            'bairro' => str_random(10),
            'celular' => str_random(10),
            'cep' => str_random(10),
            'uf' => str_random(2),
            'cidade' => str_random(10),
            'cor' => str_random(4),
            'data_emissao' => '2015-01-01',
            'email' => str_random(10),
            'folha' => str_random(10),
            'livro' => str_random(10),
            'nacionalidade' => str_random(10),
            'numero_residencia' => '11',
            'registro_nascimento' => str_random(10),
            'rua' => str_random(10),
            'status' => str_random(10),
            'telefone' => str_random(10),
        ]);
    }

}
