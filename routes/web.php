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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//juanjo
Route::resource('/admin/users', 'UsersAdminController');
Route::get('/admin/users/{id}/destroy', 'UsersAdminController@destroy')->name('users.destroy');
Route::get('/admin', 'SitesController@show')->name('admin');

// santi
Route::get('/micuenta', 'UserController@show') ->name('micuenta');
Route::post('/micuenta', 'UserController@update');
Route::patch('/micuenta', 'UserController@update_avatar');

//ema-salva
Route::get("/shop", 'ProductoController@listado')->name('shop');
Route::get('/detalleProducto/{id}', 'ProductoController@detalle')->name('detalle.prod');
Route::get("/admin/productos", 'ProductoController@listado_admin')->name('admin.prod');
Route::post("/admin/productos", 'ProductoController@agregar')->name('admin.add.prod');
Route::get("/admin/productos/{id}", 'ProductoController@borrar')->name('admin.delete.prod');

Route::get("/carrito", function(){
    return view('carrito');
}) ->name('carrito');

//ProductosAdminController Juanjo
Route::resource('/admin/products', 'ProductosAdminController');
