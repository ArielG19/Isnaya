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

<<<<<<< HEAD
Route::Resource('/productos','ProductoController');
=======

Route::get('/rubros', 'RubrosController@index');
Route::post('/rubros', 'RubrosController@create');
>>>>>>> 43e2e5b74221d4eb540130ab04737cb7c34dddf8
