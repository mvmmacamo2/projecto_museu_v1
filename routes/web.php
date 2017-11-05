<?php
use App\Evento;
use App\Exposicao;
//use DB;
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
	$exposicoes = Exposicao::all();
<<<<<<< HEAD
<<<<<<< HEAD
	
	// varialvel que determina se ha eventos ou não
	// $find = false;

	$likesexposicao =DB::table('like_exposicaos')->get();
	$comentexposicao =DB::table('comtario_exposicaos')->get();
	return view('welcome', compact('eventos'), compact('exposicoes'))->with('nrlike',$likesexposicao)->with('comentexp', $comentexposicao);
=======
>>>>>>> parent of 7c072cc... Welcome eventos
=======
>>>>>>> parent of 7c072cc... Welcome eventos

	




		//dd($likesexposicao);

	
	// $email = DB::table('users')->where('name', 'John')->value('email')
	// $likesexposicao =count(DB::table('like_exposicaos')->where('exposicao_id', '1')->get());
		//return view('welcome', compact('eventos'));
   // dd($likesexposicao);

	//$likesexposicao =DB::table('like_exposicaos')->groupBy('exposicao_id')->get();
	
<<<<<<< HEAD
<<<<<<< HEAD
	

	return view('welcome', compact('eventos'), compact('exposicoes'))->with('nrlike',$likesexposicao);

	// foreach ($exposicoes as $e) {
	// 	$id= $e->id;
	// 	//$likesexposicao =DB::table('like_exposicaos')->where('exposicao_id', $id)->get();
	// 	//groupBy('user_id')->get()
	// 	//$likesexposicao =count(DB::table('like_exposicaos')->where('exposicao_id', $id)->get());
	// 	$likesexposicao =DB::table('like_exposicaos')->where('exposicao_id', $id)->get();
	// 	//dd($likesexposicao);
	// 	return view('welcome', compact('eventos'), compact('exposicoes'))->with('nrlike',$likesexposicao);

	// 	//return view('welcome', compact('eventos'), compact('exposicoes'))->with('nrlike',$likesexposicao);
	// }

	//$likesexposicao =count(DB::table('like_exposicaos')->get());
//	$likesexposicao =count(DB::table('like_exposicaos')->where('exposicao_id', '1')->get());



	//return view('welcome', compact('eventos'), compact('exposicoes'))->with('nrlike',$likesexposicao);

=======
	return view('welcome', compact('eventos'), compact('exposicoes'))->with('nrlike',$likesexposicao);
>>>>>>> parent of 7c072cc... Welcome eventos
=======
	return view('welcome', compact('eventos'), compact('exposicoes'))->with('nrlike',$likesexposicao);
>>>>>>> parent of 7c072cc... Welcome eventos

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/register_org', 'UserController@reg');

Route::resource('/admins/exposicoes', 'Exposicao_adminController')->middleware('autenticacao');
Route::resource('/admins/eventos', 'Evento_adminController')->middleware('autenticacao');
Route::resource('/admins/galerias', 'Galeria_adminController')->middleware('autenticacao');

Route::get('/historias/museu', 'Historia_museuController@index');
Route::get('/historias/amarela', 'Historia_casa_amarelaController@index');

Route::get('/exposicoes', 'ExposicaoController@index');
Route::get('/eventos', 'EventoController@index');
Route::resource('/usuario_galerias', 'Usuario_GaleriaController');


// rotas Relacionadas a  serviços
Route::get('/servicos/escola', 'ServicosController@escola')->middleware('autenticacao');
Route::get('/servicos/patio', 'ServicosController@patio')->middleware('autenticacao');
Route::get('/servicos/individual', 'ServicosController@individual')->middleware('autenticacao');

// Rotas Admins
Route::get('/admins/pedidos/visitaguiadaescolar', 'VisitaGEscolasController@visitaguiadaescolar')->middleware('autenticacao');;
Route::get('/admins/pedidos/visitaguiadasingular', 'VisitaGSingularController@visitaguiadasingular')->middleware('autenticacao');;
Route::get('/admins/pedidos/prenda', 'VisitaGSingularController@prenda')->middleware('autenticacao');

Route::post('/servicos/individual', 'VisitaGSingularController@salvar')->middleware('autenticacao');


//
Route::resource('/admins/usuarios', 'UserController');
Route::resource('/admins/usuario', 'PerfilController');



Route::resource('/admins/galerias', 'GaleriaController');

Route::resource('/admins/galerias', 'Galeria_adminController');

// Rotas De escolas
Route::group(['middleware'=>'escola'], function (){
    //Route::auth();
	Route::get('/escola', 'EscolaController@index');
	Route::get('/escola/login', 'EscolaController@login');
	Route::get('/escola/login', 'EscolaController@postlogin');
});


// rotas de save de likes

Route::post('/', 'LikeExposicaoController@salvar');
