<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Nota;

class Aluno extends Model {

    public function notas(): HasMany {
        return $this->hasMany(Nota::class, 'matricula');
    }
    
    }
