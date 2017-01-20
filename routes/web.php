<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

Route::resource('disciplina', 'DisciplinaController');
Route::resource('professor', 'ProfessorController');
Route::resource('aluno', 'AlunoController');
Route::get('administrador/painel', function () {
    return view('painel.administrador');
});
Route::get('/', function () {
    return view('painel.index');
});
//Route::resource('disciplina/edit/{id}', 'DisciplinaController');
//Route::resource('disciplina/show/{id}', 'DisciplinaController');
