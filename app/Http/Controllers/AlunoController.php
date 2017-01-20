<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunoController extends Controller {

    private $aluno;

    function __construct(Aluno $aluno) {
        $this->aluno = $aluno;
    }

    public function index() {
        $alunos = $this->aluno->all();
        $title = 'Pagina Aluno';
        return view('aluno.index', compact('alunos', 'title'));
    }

    public function create() {
        
    }

    public function update() {
        
    }

}
