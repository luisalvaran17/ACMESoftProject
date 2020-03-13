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
#Welcome
Route::get('/', 'PagesController@index');

#Login
Route::get('/login', 'PagesController@login');

#Registrar
Route::get('/registrar/productos', 'PagesController@productos');
Route::get('/registrar/proveedores', 'PagesController@proveedores');
Route::get('/registrar/registrarClientes', 'PagesController@registrarClientes');
Route::get('/registrar/ventas', 'PagesController@venta');

#Consultar
Route::get('/consultar/clientes', 'PagesController@clientes');
Route::get('/consultar/productos', 'PagesController@consultarProductos');
Route::get('/consultar/ventas', 'PagesController@consultarVentas');
Route::get('/consultar/proveedores', 'PagesController@consultarProveedores');

Route::resource('consultar/clientes', 'Clientes_Controller'); # importante para traer variables añ front end

#Actualizar

