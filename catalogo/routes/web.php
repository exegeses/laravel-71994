<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ProductoController;

/* Route::get('/', function () {
    return view('welcome');
});*/

Route::view('/', 'plantilla');

//Route::get('/peticion', [Controlador::class, 'metodo']);
#####################################
###### crud de marcas
Route::get('/marcas', [MarcaController::class, 'index']);
Route::get('/marca/create', [MarcaController::class, 'create']);
Route::post('/marca/store', [MarcaController::class, 'store']);
Route::get('/marca/edit/{marca}', [MarcaController::class, 'edit']);
Route::put('/marca/update/{marca}', [MarcaController::class, 'update']);
Route::get('/marca/delete/{marca}', [MarcaController::class, 'delete']);
Route::delete('/marca/destroy/{marca}', [MarcaController::class, 'destroy']);

#####################################
###### crud de productos
Route::get('/productos', [ProductoController::class, 'index']);
