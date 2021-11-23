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

// Index
Route::get('/', function () {
    return view('home');
});

/**
 * Rotas dedicadas a classe ClientesController
 */
// Dashboard (Tabela)
 Route::get('/dash', "ClientesController@index");

// Adicionar usuário - método post
Route::get('/create', "ClientesController@pageCreateClient");
// Método post - Criar usuário 
Route::post('/create', "ClientesController@createClient");

// Editar usuário
Route::get('/edit/{id}', "ClientesController@pageUpdate");
// Método post - Atualizar usuário
Route::post('/edit/{id}', "ClientesController@updateUser");

// Página individual usuário
Route::get('/perfil/{id}', 'ClientesController@perfil');

// Página individual usuário
Route::get('/economia', 'EconomiaController@consultarCotacao');

// Excluir usuário
Route::delete('/dash/{id}', "ClientesController@delete");
