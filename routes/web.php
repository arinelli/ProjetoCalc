
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
    return view('index');
});

Route::get('/users', 'ControladorUser@index');
Route::get('/users/novo', 'ControladorUser@create');
Route::post('/users', 'ControladorUser@store');
Route::get('/users/apagar/{id}', 'ControladorUser@destroy');
Route::get('/users/editar/{id}', 'ControladorUser@edit');
Route::post('/users/{id}', 'ControladorUser@update');


Route::get('/enderecos', 'ControladorEndereco@index');
Route::get('/enderecos/novo', 'ControladorEnderecos@create');
Route::post('/enderecos', 'ControladorEndereco@store');
Route::get('/enderecos/apagar/{id}', 'ControladorEndereco@destroy');
Route::get('/enderecos/editar/{id}', 'ControladorEndereco@edit');
Route::post('/enderecos/{id}', 'ControladorEndereco@update');



Route::get('/alunos', 'ControladorAluno@index');
Route::get('/alunos/novo', 'ControladorAluno@create');
Route::post('/alunos', 'ControladorAluno@store');
Route::get('/alunos/apagar/{id}', 'ControladorAluno@destroy');
Route::get('/alunos/editar/{id}', 'ControladorAluno@edit');
Route::post('/alunos/{id}', 'ControladorAluno@update');



