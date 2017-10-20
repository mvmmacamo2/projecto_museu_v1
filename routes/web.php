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
    return view('template_welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::resource('/exposicoes', 'ExposicaoController');

// Route::resource('/galerias', 'GaleriaController');
Route::resource('/admins/exposicoes', 'Exposicao_adminController');
Route::resource('/admins/eventos', 'Evento_adminController');

Route::get('/historias/museu','Historia_museuController@index');
// Route::get('/historias/amarela','Historia_casa_amarelaController@index');

// Route::get('/exposicoes', 'ExposicaoController@index');
// Route::get('/eventos', 'EventoController@index');


