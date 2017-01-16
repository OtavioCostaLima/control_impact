<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Disciplina;

class DisciplinaController extends Controller {

    private $disciplina;

    function __construct(Disciplina $disciplina) {
        $this->disciplina = $disciplina;
    }

    public function index() {
        $disciplinas = $this->disciplina->all();
        $title = 'Pagina Disciplina';
        return view('disciplina.index', compact('disciplinas', 'title'));
    }

    public function create() {
        return view('/disciplina.create');
    }

    public function store(Request $request) {
        $dados = $request->except('_token');
        $insert = $this->disciplina->insert($dados);

        if ($insert) {
            return redirect()->route('disciplina.index');
        } else {
            return redirect()->route('disciplina.store');
        }
    }

    public function deletar($id) {

        $dis = $this->disciplina->find($id);
        $delete = $dis->delete();
        if ($delete) {
            return redirect()->route('disciplina.index');
        }
    }

}
