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

Route::get('/rubros', 'RubrosController@index');
Route::post('/rubros', 'RubrosController@create');
=======
Route::Resource('/productos','ProductoController');
>>>>>>> 962bde2003184d1a6efe3f2aaaf00cbc36c69da5
