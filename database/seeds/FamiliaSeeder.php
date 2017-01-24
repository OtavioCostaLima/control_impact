<?php

use Illuminate\Database\Seeder;
use App\Models\Familia;

class FamiliaSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Familia::create([
            'nome_pai' => 'OLIMPIO BARBOSA LIMA',
            'nome_mae' => 'APARECIDA SOUSA COSTA',
            'estado_civil_mae' => 'CASADA',
            'estado_civil_pai' => 'CASADO',
            'nacionalidade_mae' => str_random(10),
            'nacionalidade_pai' => str_random(10),
            'cpf_mae' => str_random(10),
            'cpf_pai' => str_random(10),
            'grau_mae' => str_random(2),
            'grau_pai' => str_random(10),
            'naturalidade_mae' => str_random(4),
            'naturalidade_pai' => str_random(10),
            'profissao_mae' => str_random(10),
            'profissao_pai' => str_random(10),
            'rua_mae' => str_random(10),
            'rua_pai' => str_random(10),
            'numero_residencia_mae' => str_random(10),
            'numero_residencia_pai' => str_random(10),
            'bairro_mae' => str_random(10),
            'bairro_pai' => str_random(10),
            'cep_mae' => str_random(10),
            'cep_pai' => str_random(10),
            'celular_mae' => str_random(10),
            'celular_pai' => str_random(10),
            'cidade_mae' => str_random(10),
            'cidade_pai' => str_random(10),
            'uf_mae' => str_random(2),
            'uf_pai' => str_random(2),
            'email_mae' => str_random(10),
            'email_pai' => str_random(10),
        ]);
    }

}
