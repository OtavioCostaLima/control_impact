<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;

class FuncionarioController extends Controller {

    private $funcionario;

    function __construct(Funcionario $funcionario) {
        $this->funcionario = $funcionario;
    }

    public function index() {
        $title = 'Pagina Funcionario';
        $funcionarios = $this->funcionario->all();
        return view('funcionario.index', compact('funcionarios', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $dados = $request->except('_token');
        $insert = $this->funcionario->insert($dados);

        if ($insert) {
            return redirect()->route('funcionario.index');
        } else {
            return redirect()->route('funcionario.store');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $funcionario = $this->funcionario->find($id);
        $delete = $funcionario->delete();
        if ($delete) {
            return redirect()->route('funcionario.index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $dados = request()->except('_token', '_method');
        $func = $this->funcionario->find($id);
        if ($func->update($dados)) {
            return redirect('funcionario');
        } else {
            return redirect('funcionario.edit');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
