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
    return view('welcome');
});

Route::get("/shop", 'ProductoController@listado');

Route::get('/detalleProducto/{id}', 'ProductoController@detalle');

Route::get("/admin", 'ProductoController@listado_admin');

Route::post("/admin", 'ProductoController@agregar');

Route::get("/admin/{id}", 'ProductoController@borrar');
