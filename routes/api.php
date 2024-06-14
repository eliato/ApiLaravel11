<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


//Trae todas las categorias
Route::get('/categorias', [CategoriaController::class, 'index']);

//aca se guarda una nueva categoria
Route::post('/categorias', [CategoriaController::class, 'store']);

//busca una categoria x id
Route::get('/categorias/{id}', [CategoriaController::class, 'show']);

//actualiza una categoria x un id
Route::put('/categorias/{id}', [CategoriaController::class, 'update']);

//elimina una categoria x un id
Route::delete('/categorias/{id}',[CategoriaController::class, 'destroy']);