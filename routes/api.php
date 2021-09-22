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
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/ping', function(Request $request){
    return ['pong' => true];
});
/*
//Pegar todas as notas
Route::get('/notes', '');
//Pegar uma nota especifica
Route::get('/notes/{id}', '');
//Requisição post na listagem
Route::post('/notes', '');
//Editar uma nota
Route::put('/notes/{id}', '');
//Deletar uma nota
Route::delete('/notes/{id}', '');
*/