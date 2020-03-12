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

Route::get('/', 'PagesController@index');
Route::get('/productos', 'PagesController@productos');
Route::get('/clientes', 'PagesController@clientes');
Route::get('/proveedores', 'PagesController@proveedores');
Route::get('/venta', 'PagesController@venta');
Route::get('/login', 'PagesController@login');

