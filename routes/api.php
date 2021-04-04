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

Route::prefix('Api')->group(function () {
    Route::resources([
        'users' => 'UsuariosController',
        'boletimS' => 'BOSimplificadoController',
        'boletimR' => 'BOSimplificadoController',
        'boletimI' => 'BOSimplificadoController',
    ]);
});


Route::prefix('v2')->group(function () {
    Route::get('/boletimS/{boletim}', 'BOSimplificadoController@show');
});

// Route::prefix('v1')->group(function () {
//     Route::get('produto', 'ProdutosController@index');
//     Route::get('/users', 'UsuariosController@index');
//     Route::post('/users', 'UsuariosController@store');
//     Route::get('/users/{usuario}', 'UsuariosController@show');
// });
