<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Serie;

class Modalidade extends Model {

    public function series(): HasMany {
        return HasMany(Serie::class, 'id');
    }

}
