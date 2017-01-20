<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Modalidade;

class Serie extends Model {

    public function series(): BelongsTo {
        return belongsTo(Modalidade::class);
    }

}
