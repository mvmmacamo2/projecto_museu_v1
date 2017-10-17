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

Route::resource('exposicoes', 'ExposicaoController');

Route::resource('galerias', 'GaleriaController');

Route::get('historias/museu','Historia_museuController@index');
Route::get('historias/amarela','Historia_casa_amarelaController@index');

Route::get('contactos','ContactoController@index');

Route::resource('exposicoes', 'ExposicaoController');
