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
Route::group(['prefix' => 'aluno'], function (){
    Route::get('/list', 'AlunoController@getAlunos')->name('aluno.list');
    Route::get('/form', 'AlunoController@form')->name('aluno.form');
    Route::post('/salvar', 'AlunoController@salvarAluno')->name('aluno.salvarAluno');
});


Route::get('/', function () {
    return view('welcome');
});


'contato@caldeirainformatica.com.br';
