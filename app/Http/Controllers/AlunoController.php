<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\Familia;

class AlunoController extends Controller {

    private $aluno;
    private $a;

    function __construct(Aluno $aluno, Familia $fam) {
        $this->aluno = $aluno;
        $this->a = $fam;
    }

    public function index() {
        $alunos = $this->aluno->all();
        $title = 'Pagina Aluno';
        return view('aluno.index', compact('alunos', 'title'));
    }

    public function create() {
        $title = 'Cadastro de Alunos';
        return view('aluno.create', compact('title'));
    }

    public function update() {
        
    }

    public function aniversariantes() {
        $alunos = $this->aluno->all();
        $this->aluno->whereDate('data_nascimento', '==', date('m-d'));
        return view('aluno.turma', compact('alunos'));
    }

}
