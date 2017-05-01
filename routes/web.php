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
    return view('isnaya/vistas/index');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

//---------------------------------------------------------------------------
Route::Resource('/usuarios','UserController');

//1. agregamos una nueva ruta para para llamar al metodo listarUsuarios
//2. pasamos el parametro {page?} para la paginacion
Route::get('/listar-usuarios/{page?}','UserController@listarUsuarios');


//---------------------------------------------------------------------------
Route::Resource('/productos','ProductoController');
Route::get('/listar-productos/{page?}','ProductoController@listarTodo');



//---------------------------------------------------------------------------
Route::Resource('/formatos', 'FormatoController');
Route::get('/listar-formatos/{page?}','FormatoController@listarFormato');



//---------------------------------------------------------------------------
Route::get('/rubros', 'RubrosController@index');



//---------------------------------------------------------------------------
Route::post('/rubros', 'RubrosController@create');



//---------------------------------------------------------------------------
Route::Resource('/rubros', 'RubrosController');



//---------------------------------------------------------------------------
Route::Resource('/cliente', 'ClienteController');



//---------------------------------------------------------------------------
Route::Resource('/proforma', 'ProformaController');



//---------------------------------------------------------------------------
Route::Resource('/bitacora', 'BitacoraController');



//---------------------------------------------------------------------------
Route::Resource('/color', 'ColorController');

