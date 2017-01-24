<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Modalidade;

class Serie extends Model {

    public function series(): BelongsTo {
        return belongsTo(Modalidade::class);
    }

      public function Aluno() {
        //    $this->belongsToMany('relacao', 'nome da tabela pivot', 'key ref. books em pivot', 'key ref. author em pivot')
        return $this->belongsToMany('App\Models\Aluno', 'turmas', 'id_serie', 'matricula_aluno')->withPivot(['descricao', 'turno', 'ano', 'numero_chamada']);
    }
    
}
