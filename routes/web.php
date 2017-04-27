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


Route::Resource('/rubros', 'RubrosController');
Route::Resource('/productos','ProductoController');
Route::Resource('/cliente', 'ClienteController');
Route::Resource('/formato', 'FormatoController');
Route::Resource('/proforma', 'ProformaController');
Route::Resource('/bitacora', 'BitacoraController');
Route::Resource('/color', 'ColorController');