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
    return view('home');
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

Route::get('/detalleProducto/{id}', 'ProductoController@detalle');
Route::get("/admin/productos", 'ProductoController@listado_admin')->name('admin.prod');
Route::post("/admin/productos", 'ProductoController@agregar');
Route::get("/admin/productos/{id}/destroy", 'ProductoController@destroy')->name('prod.delete');
Route::get("/admin/productos/{id}", 'ProductoController@show')->name('prod.edit');
Route::put("/admin/productos/{id}", 'ProductoController@edit')->name('prod.update');

//Pato Carrito

Route::get("/carrito/{id?}", 'CarritoController@add')->name('carrito');
Route::get("/carrito/{id}/destroy", 'CarritoController@destroy')->name('carrito.delete');




//ProductosAdminController Juanjo
Route::resource('/admin/products', 'ProductosAdminController');
Route::get('/admin/products/{id}/destroy', 'ProductosAdminController@destroy')->name('products.destroy');


//checkout juanjo
Route::resource('/checkout', 'CheckoutsController');