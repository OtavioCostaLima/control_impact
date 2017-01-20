<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professor;

class ProfessorController extends Controller {

    private $professor;

    function __construct(Professor $professor) {
        $this->professor = $professor;
    }

    public function index() {
        $professores = $this->professor->all();
        return view('professor.index', compact('professores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $title = 'Cadastro Professor';
        return view('professor.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $dados = $request->except('_token');
        $insert = $this->professor->insert($dados);

        if ($insert) {
            return redirect()->route('professor.index');
        } else {
            return redirect()->route('professor.store');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
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
        //
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

    public function retornarTurmas() {
        $this->professor('horarios')->join('turmas', function ($join) {
                    $join->on('horarios.id_professor', '=', 'professor.id');
                })
                ->get();
    }

}
