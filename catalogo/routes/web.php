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

#####################################
###### crud de productos
Route::get('/productos', [ProductoController::class, 'index']);
