<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contratante extends Model
{
    public function contratante() {
        return $this->belongsToMany('App\Models\Aluno', 'contratantes', 'matricula_aluno', 'id_contratante')->withPivot(['data_contrato', 'data_renovacao']);
    }
}
