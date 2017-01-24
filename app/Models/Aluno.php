<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Nota;
use App\Models\Familia;

class Aluno extends Model {

    public $incrementing = false;
    protected $primaryKey = 'matricula';

    public function notas(): HasMany {
        return $this->hasMany(Nota::class, 'matricula');
    }

    public function familia(): BelongsTo {
        return $this->belongsTo(Familia::class, 'id_familia');
    }

    public function Serie() {
        //    $this->belongsToMany('relacao', 'nome da tabela pivot', 'key ref. books em pivot', 'key ref. author em pivot')
        return $this->belongsToMany('App\Models\Serie', 'turmas', 'matricula_aluno', 'id_serie')->withPivot(['descricao', 'turno', 'ano', 'numero_chamada']);
    }

    public function contratante() {
        return $this->belongsToMany('App\Models\Contratante', 'contratantes', 'matricula_aluno', 'id_contratante')->withPivot(['data_contrato', 'data_renovacao']);
    }

}
