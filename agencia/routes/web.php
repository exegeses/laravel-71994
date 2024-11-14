<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::view('peticion', nombreVista);
//Route::view('/vista', 'vista');

//Route::get('peticion', accion)
Route::get('/mensaje.html', function ()
{
    return 'Hola mundo desde Laravel';
});
Route::get('/vista', function ()
{
    $nombre = 'marcos';
    $numero = 50;
    $datos = [
                'curso'=>'Desarrollo con Laravel',
                'codigo'=>71994,
                'inicio'=>'04/11/202',
                'fin'=>'16/12/2024'
            ];
    return view('vista', [
                                'nombre'=>$nombre,
                                'numero'=>$numero,
                                'datos'=>$datos
                              ]
    );
});

Route::view('/nav', 'navbar');
Route::view('/hero', 'hero');

Route::get('/proveedores', function ()
{
    //Obtenemos el listado de proveedores
    $proveedores = DB::select('SELECT * FROM proveedores');
    //Retornamos la vista
    return view('proveedores', [ 'proveedores'=>$proveedores ]);
});
