<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;

class AlunoController extends Controller {

    public function index(Aluno $aluno) {
        $alunos = $aluno->all();
        $title = 'Pagina Aluno';
        return view('aluno.index', compact('alunos','title'));
    }

    public function create() {
       
    }
    public function update() {
       
    }

}
