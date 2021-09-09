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

// Up serve -> php artisan serve

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dash', "DadosController@index");

Route::get('/dash/create', "DadosController@create");

