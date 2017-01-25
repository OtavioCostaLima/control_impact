<?php

use Illuminate\Database\Seeder;
use App\Models\Contratante;

class ContratanteSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Contratante::create([
            'nome' => 'OLIMPIO BARBOSA LIMA',
            'nacionalidade' => str_random(10),
            'cpf' => str_random(10),
            'rg' => str_random(10),
            'orgao_expeditor' => str_random(10),
            'naturalidade' => str_random(4),
            'profissao' => str_random(10),
            'filiacao' => str_random(10),
            'rua' => str_random(10),
            'numero' => str_random(10),
            'bairro' => str_random(10),
            'cep' => str_random(10),
            'celular' => str_random(10),
            'cidade' => str_random(10),
            'uf' => str_random(2),
            'email' => str_random(10),
            'local_trabalho' => str_random(10),
            'endereco_profissional' => str_random(10),
            'numero_endereco_profissional' => str_random(10),
            'telefone' => str_random(10),
            'telefone_comercial' => str_random(10),
            'grau_parentesco_aluno' => str_random(10),
        ]);
    }

}
