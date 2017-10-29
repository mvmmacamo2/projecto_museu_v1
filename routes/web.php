<?php
use App\Evento;
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
	$eventos = Evento::all();
    return view('welcome', compact('eventos'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::resource('/galerias', 'GaleriaController');
Route::resource('/admins/exposicoes', 'Exposicao_adminController');
Route::resource('/admins/eventos', 'Evento_adminController');

Route::get('/historias/museu', 'Historia_museuController@index');
Route::get('/historias/amarela', 'Historia_casa_amarelaController@index');

Route::get('/exposicoes', 'ExposicaoController@index');
Route::get('/eventos', 'EventoController@index');


// rotas Relacionadas a  serviços
Route::get('/servicos/escola', 'ServicosController@escola')->middleware('autenticacao');;
Route::get('/servicos/patio', 'ServicosController@patio')->middleware('autenticacao');;
Route::get('/servicos/individual', 'ServicosController@individual')->middleware('autenticacao');;

// Rotas Admins
Route::get('/admins/pedidos/visitaguiadaescolar', 'VisitaGEscolasController@visitaguiadaescolar')->middleware('autenticacao');;
Route::get('/admins/pedidos/visitaguiadasingular', 'VisitaGSingularController@visitaguiadasingular')->middleware('autenticacao');;
Route::get('/admins/pedidos/prenda', 'VisitaGSingularController@prenda')->middleware('autenticacao');;

Route::post('/servicos/individual', 'VisitaGSingularController@salvar')->middleware('autenticacao');;


//
Route::resource('/admins/usuarios', 'UserController');
Route::resource('/admins/usuario', 'PerfilController');

Route::resource('/admins/galerias', 'GaleriaController');
