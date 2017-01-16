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

Route::get('/', 'SiteController@index');
Route::resource('aluno', 'AlunoController');
Route::get('disciplina/cadastrar', 'DisciplinaController@create');
Route::resource('disciplina', 'DisciplinaController');
Route::resource('disciplina/deletar/{id}', 'DisciplinaController@deletar');

