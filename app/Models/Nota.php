<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\TipoNota;

class Nota extends Model {

    public function tipo_notas(): BelongsTo {

        return $this->belongsTo(TipoNota::class);
    }

    public function notas(): BelongsTo {
        return $this->belongsTo(Aluno::class);
    }

}
