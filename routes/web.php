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
    return view('isnaya/vistas/index');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
 
Route::Resource('/productos','ProductoController');
//1. agregamos una nueva ruta para para llamar al metodo listarTodo
//2. pasamos el parametro {page?} para la paginacion
Route::get('/listar/{page?}','ProductoController@listarTodo');

Route::get('/rubros', 'RubrosController@index');
Route::post('/rubros', 'RubrosController@create');

Route::Resource('/rubros', 'RubrosController');
Route::Resource('/productos','ProductoController');
Route::Resource('/cliente', 'ClienteController');
Route::Resource('/formato', 'FormatoController');
Route::Resource('/proforma', 'ProformaController');
Route::Resource('/bitacora', 'BitacoraController');
Route::Resource('/color', 'ColorController');

