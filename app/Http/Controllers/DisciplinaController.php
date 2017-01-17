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
        $title = 'Pagina Cadastro';
        $tipos = ['Reprova', 'Não Reprova'];
        return view('disciplina.create', compact('tipos', 'title'));
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

    public function show($id) {

        $dis = $this->disciplina->find($id);
        $delete = $dis->delete();
        if ($delete) {
            return redirect()->route('disciplina.index');
        }
    }

    public function edit($id) {
        $disciplina = $this->disciplina->find($id);
        $title = "Editar: {{$disciplina->descricao}}";
        $tipos = ['Reprova', 'Não Reprova'];
        return view('disciplina.create', compact('disciplina', 'title', 'tipos'));
    }

    public function update(Request $request, $id) {
        $dados = request()->except('_token','_method');
        $disciplina = $this->disciplina->find($id);
        $update = $disciplina->update($dados);
        if ($update) {
            return redirect('disciplina');
        } else {
            return redirect('disciplina.edit');
        }
    }

}
