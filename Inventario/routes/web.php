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
    return view('index');
});

Route::get('/categoria', 'CategoriaController@index');
Route::post('/categoria/nuevo', 'CategoriaController@store');
Route::put('/categoria/editar', 'CategoriaController@update');
Route::put('/categoria/eliminar', 'CategoriaController@eliminar');

Route::get('/producto', 'ProductoController@index');
Route::post('/producto/nuevo', 'ProductoController@store');
Route::put('/producto/editar', 'ProductoController@update');
Route::put('/producto/eliminar', 'ProductoController@eliminar');
Route::put('/producto/calificar', 'ProductoController@validar');