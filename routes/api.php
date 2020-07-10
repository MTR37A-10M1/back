<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::prefix('Usuario')->group(function(){
    Route::post('add', 'Api\UsuarioController@add');
    Route::post('login', 'Api\UsuarioController@login');
});

Route::prefix('Equipo')->group(function(){
    Route::get('all', 'Api\EquipoController@all');
});

Route::prefix('Falla')->group(function(){
    Route::get('add', 'Api\FallaController@add');
});