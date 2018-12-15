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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/instrutores', function () {
    return App\Instrutor::all();
});
Route::get('/instrutores/{id}', function ($id) {
    return App\Instrutor::find($id);
});
Route::get('/alunos', function () {
    return App\Aluno::all();
});
Route::get('/alunos/{id}', function ($id) {
    return App\Aluno::find($id);
});
Route::get('/cursos', function () {
    return App\Curso::all();
});
Route::get('/cursos/{id}', function ($id) {
    return App\Curso::find($id);
});
Route::get('/turmas/{id}', 'TurmaController@index');
Route::get('/resumo_turmas', 'TurmaController@resumo');
Route::get('/top_turmas', 'TurmaController@top_turmas');
Route::get('/cursos_turmas', 'TurmaController@cursos_turmas');
