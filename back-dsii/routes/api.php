<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});




Route::group(array('prefix' => '/v1'), function(){

    Route::post('register', 'UserController@register');
    Route::post('login', 'UserController@authenticate');
    Route::get('open', 'DataController@open');

    Route::group(['middleware' => ['jwt.verify']], function() {
        //Route::get('user', 'UserController@getAuthenticatedUser');
        //Route::get('closed', 'DataController@closed');
        Route::get('tipos_documentos', 'TiposDocumetosController@getTiposDocumentos');
        Route::apiResource('clientes', 'Clientes_Controller');
        Route::apiResource('proveedores', 'ProveedorController');
        Route::apiResource('productos', 'ProductosController');
    });
});
