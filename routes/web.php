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

Auth::routes();

Route::get('reportes','ReporteController@mes');

Route::Resource('/usuarios','UserController');
Route::get('/listar-usuarios/{page?}','UserController@listarUsuarios');

Route::group(['middleware' => 'auth'], function()
{
    Route::get('Administrador',function()
    {
        return view('/home');
    });
    //Proteger las rutas para que solo usuarios registrados puedan acceder a ellas

    Route::get('perfil','UserController@perfil');
    Route::post('perfil','UserController@updatePerfil');

    Route::get('pdf','PDFController@index');
    Route::get('/home', 'HomeController@index');

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
    Route::Resource('/calculos', 'CalculosController');

    Route::get('/listar-proformas/{page?}','ProformasController@listarProforma');
    Route::get('/listar-detalle/{id}','ProformasController@listarDetalle');

    Route::Resource('/bitacora', 'BitacoraController');
    Route::get('/listarBitacoras','BitacoraController@listarBitacora');

});