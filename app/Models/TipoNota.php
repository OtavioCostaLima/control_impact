<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Nota;

class TipoNota extends Model {

    public function notas(): HasMany {
        return $this->hasMany(Nota::class, 'id');
    }
   

}
