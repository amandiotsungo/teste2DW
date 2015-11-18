<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('layout.master');

});


Route::get('teste', function () {
    return view('utente.create');

});

Route::resource('devolucao', 'DevolucaoController');
Route::resource('livro', 'LivroController');
Route::resource('requisicao', 'RequisicaoController');
Route::resource('utente', 'UtenteController');
