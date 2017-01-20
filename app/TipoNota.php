<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Nota;

class TipoNota extends Model {

    public function notas(): HasMany {
        return $this->hasMany(Nota::class, 'id');
    }

}
