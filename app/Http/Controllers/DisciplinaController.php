<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disciplina;

class DisciplinaController extends Controller {

    private $disciplina;

    function __construct(Disciplina $disciplina) {
        $this->disciplina = $disciplina;
    }

    public function listar() {
            $disciplinas = $this->disciplina->all();
        $response = [
            'tipos' => [
                'Reprova' => 'Reprova',
                'Não Reprova' => 'Não Reprova'
            ],
            'data' => $disciplinas
        ];
        return response()->json($response);
    }

    public function index() {
        return view('disciplina.index');
    }

    public function create() {
        $title = 'Pagina Cadastro';
        $tipos = ['Reprova' => 'Reprova', 'Não Reprova' => 'Não Reprova'];
        return view('disciplina.index', compact('tipos', 'title'));
    }

    public function store(Request $request) {
        $dados = $request->except('_token');
        $insert = $this->disciplina->create($dados);

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
        $tipos = ['Reprova' => 'Reprova', 'Não Reprova' => 'Não Reprova'];
        $disciplina = $this->disciplina->find($id);
        $title = "Editar: {{$disciplina->descricao}}";
        return redirect()->view('disciplina.index', compact('disciplina', 'title', 'tipos'));
    }

    public function update(Request $request, $id) {
        $dados = request()->except('_token', '_method');
        $disc = $this->disciplina->find($id);
        if ($disc->update($dados)) {
            return redirect('disciplina');
        } else {
            return redirect('disciplina.edit');
        }
    }

}
