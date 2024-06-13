<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


//Trae todas las categorias
Route::get('/categorias', [CategoriaController::class, 'index']);

//busca una categoria x id
Route::get('/categorias/{id}', [CategoriaController::class, 'show']);