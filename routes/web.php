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
//---------------------------------------------------------------------------
Route::get('/', function () {
    return view('auth/login');
});
Route::get('/prueba', function(){

	//return view('isnaya.proformas.proformasCreate');
	return view('isnaya.costos.proforma');
});


Auth::routes();

Route::get('perfil','UserController@perfil');
Route::post('perfil','UserController@updatePerfil');


Route::get('pdf','PDFController@index');

Route::get('/home', 'HomeController@index');

Route::Resource('/usuarios','UserController');
Route::get('/listar-usuarios/{page?}','UserController@listarUsuarios');


Route::Resource('/productos','ProductoController');
Route::get('/listar-productos/{page?}','ProductoController@listarTodo');


Route::Resource('/rubros', 'RubrosController');
Route::get('/mos_rubros', 'RubrosController@listar');

Route::Resource('/clientes', 'ClienteController');
Route::get('/lis_clientes','ClienteController@listar');


Route::Resource('/formatos', 'FormatoController');
Route::get('/listar-formatos/{page?}','FormatoController@listarFormato');


Route::Resource('/colores', 'ColorController');
Route::get('/lisColores','ColorController@listar');


Route::Resource('/proformas', 'ProformasController');
Route::get('/listar-proformas/{page?}','ProformasController@listarProforma');

Route::Resource('/bitacora', 'BitacoraController');

Route::Resource('/calculos', 'CalculosController');
Route::get('/listados','CalculosController@listar');