<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\TipoNota;
class Nota extends Model
{
    public function tipo_notas() : BelongsTo{
        
        return $this->belongsTo(TipoNota::class); 
    }
}
