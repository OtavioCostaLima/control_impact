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
Route::resource('disciplina', 'DisciplinaController');
Route::resource('professor', 'ProfessorController');

//Route::resource('disciplina/edit/{id}', 'DisciplinaController');
//Route::resource('disciplina/show/{id}', 'DisciplinaController');
