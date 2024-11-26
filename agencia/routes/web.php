<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

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
######################
Route::view('/', 'plantilla');
#####################
### CRUD de regiones
Route::get('/regiones', function ()
{
    //Obtenemos el listado de regiones
    /* $regiones = DB::select('SELECT *
                                FROM regiones
                                ORDER BY idRegion DESC');*/
    $regiones = DB::table('regiones')
                        ->orderBy('idRegion','DESC')
                        ->get();
    //Retornamos la vista "regiones"
    return view('regiones', [ 'regiones'=>$regiones ]);
});
Route::get('/destinos', function ()
{
    //Obtenemos listado de destinos
    $destinos = DB::table('destinos as d')
                        //->select('d.*', 'r.nombre as region')
                        ->join('regiones as r', 'd.idRegion', '=', 'r.idRegion' )
                        ->orderBy('idDestino', 'desc')
                        ->get();
    //Retornamos la vista destinos
    return view('destinos', [ 'destinos'=>$destinos ]);
});
Route::get('/destino/create', function ()
{
    //Obtenemos listado de regiones
    $regiones = DB::table('regiones')->get();
    return view('destinoCreate', [ 'regiones'=>$regiones ]);
});
Route::post('/destino/store', function ()
{
    //Capturamos datos enviados por el form
    // $aeropuero = request()->post('aeropuerto');
    // $aeropuero = request()->input('aeropuerto');
    // $aeropuerto = request()->aeropuerto;
    $aeropuerto = request('aeropuerto');
    $precio = request('precio');
    $idRegion = request('idRegion');
    try {
        // raw sql
        /* DB::insert('INSERT INTO destinos
                        ( aeropuerto, precio, idRegion )
                     VALUE
                        ( :aeropuerto, :precio, :idRegion )',
                        [ $aeropuerto, $precio, $idRegion ]
                    );*/
        DB::table('destinos')
                    ->insert(
                        [
                           'aeropuerto'=>$aeropuerto,
                           'precio'=>$precio,
                           'idRegion'=>$idRegion,
                            'activo'=>1
                        ]
                    );
        return redirect('/destinos')
                    ->with(
                        [
                            'css'=>'green',
                            'mensaje'=>'Destino: '.$aeropuerto.' agregado correctamente',
                        ]
                    );

    }catch( Throwable $th ){
        return redirect('/destinos')
            ->with(
                [
                    'css'=>'red',
                    'mensaje'=>'No se pudo agregar el destino: '.$aeropuerto
                ]
            );
    }
});

Route::get('/destino/edit/{idDestino}', function ($idDestino)
{

    //Obtenemos listado de regiones
    $regiones = DB::table('regiones')->get();
    //Obtenemos datos de destino por id
    $destino = DB::table('destinos')
                    ->where('idDestino', $idDestino)
                    ->first();
    //Retornamos la vista pasándole estos datos
    return view('destinoEdit',
            [
                'regiones'=>$regiones,
                'destino'=>$destino
            ]);
});

Route::post('/destino/update', function ()
{
    //Capturamos datos enviados por el form
    $aeropuerto = request('aeropuerto');
    $precio = request('precio');
    $idRegion = request('idRegion');
    $idDestino = request('idDestino');
    try {
        DB::table('destinos')
                ->where('idDestino', $idDestino)
                ->update(
                    [
                        'aeropuerto'=>$aeropuerto,
                        'precio'=>$precio,
                        'idRegion'=>$idRegion
                    ]
                );
        return redirect('/destinos')
                ->with(
                    [
                        'css'=>'green',
                        'mensaje'=>'Destino: '.$aeropuerto.' modificado correctamente',
                    ]
                );
    }
    catch ( Throwable $th ){
        return redirect('/destinos')
            ->with(
                [
                    'css'=>'red',
                    'mensaje'=>'No se pudo modificar el destino: '.$aeropuerto
                ]
            );
    }
});

Route::get('/destino/delete/{idDestino}', function ($idDestino)
{
    //Obtenemos datos de un destino por su id
    $destino = DB::table('destinos as d')
                    ->join('regiones as r', 'd.idRegion', '=', 'r.idRegion' )
                    ->where('idDestino',$idDestino)
                    ->first();
    //Retornamos la vista con estos datos
    return view('destinoDelete', [ 'destino'=>$destino ]);
});

Route::post('/destino/destroy', function ()
{
    $idDestino = request('idDestino');
    $aeropuerto = request('aeropuerto');
    try {
        DB::table('destinos')
                ->where('idDestino', $idDestino)
                ->delete();
        return redirect('/destinos')
            ->with(
                [
                    'css'=>'green',
                    'mensaje'=>'Destino: '.$aeropuerto.' eliminado correctamente',
                ]
            );
    }
    catch ( Throwable $th ){
        return redirect('/destinos')
            ->with(
                [
                    'css'=>'red',
                    'mensaje'=>'No se pudo elimnar el destino: '.$aeropuerto
                ]
            );
    }
});
