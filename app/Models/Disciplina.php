<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model {

    protected $fillable = ['descricao', 'tipo'];
    public $timetamps = true;

}
