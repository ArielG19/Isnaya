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


<<<<<<< HEAD
Route::Resource('/rubros', 'RubrosController');
Route::get('/mos_rubros/{page?}', 'RubrosController@listar');

Route::Resource('/clientes', 'ClienteController');
Route::get('/lis_clientes/{page?}','ClienteController@listar');

Route::Resource('/formato', 'FormatoController');
=======

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
>>>>>>> 945591408b8189e9a0eef6686dfa8bb8b2e6435c
Route::Resource('/proforma', 'ProformaController');



//---------------------------------------------------------------------------
Route::Resource('/bitacora', 'BitacoraController');
<<<<<<< HEAD
Route::Resource('/color', 'ColorController');
=======



//---------------------------------------------------------------------------
Route::Resource('/color', 'ColorController');

>>>>>>> 945591408b8189e9a0eef6686dfa8bb8b2e6435c
