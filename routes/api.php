<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NoteController;

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

//Pegar todas as notas
Route::get('/notes', [NoteController::class, 'all']);

//Pegar uma nota especifica
Route::get('/note/{id}',  [NoteController::class, 'one']);

//Adicionar uma nova note
Route::post('/note', [NoteController::class, 'new']);

//Editar uma nota
Route::put('/note/{id}', [NoteController::class, 'edit']);

//Deletar uma nota
Route::delete('/note/{id}', [NoteController::class, 'delete']);
