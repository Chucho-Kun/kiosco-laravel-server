<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Sanctum\Contracts\HasApiTokens;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Route::get('/categorias' , [ CategoriaController::class, 'index']);

Route::apiResource('/categorias', CategoriaController::class);
Route::apiResource('/productos', ProductoController::class);