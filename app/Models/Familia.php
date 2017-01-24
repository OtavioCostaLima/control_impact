<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Aluno;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Familia extends Model {

    public function alunos(): HasMany {
        return $this->hasMany(Aluno::class, 'id_familia');
    }

}
