<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('dashboard');
});

Auth::routes();

Route::resource('alunos', 'alunoController')->middleware('auth');
Route::resource('turmas', 'turmaController')->middleware('auth');
Route::resource('cursos', 'cursoController')->middleware('auth');
Route::resource('disciplinas', 'DisciplinasController')->middleware('auth');
Route::resource('professores', 'ProfessoresController')->middleware('auth');


