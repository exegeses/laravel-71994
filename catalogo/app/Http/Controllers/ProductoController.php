<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;
use App\Http\Requests\ProductoRequest;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Obtenemos listado de productos
        $productos = Producto::orderBy('idProducto', 'desc')
            ->paginate(5);
        return view('productos', [ 'productos'=>$productos ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //obtener listado de maras y catagorias para el select
        $marcas = Marca::all();
        $categorias = Categoria::all();
        return view('productoCreate',
                [
                    'marcas' => $marcas,
                    'categorias' => $categorias
                ]);
    }

    private function subirImagen(Request $request) : string
    {

        // Si no enviaron imagen
        $prdImagen = 'noDisponible.svg';

        //dd($request->file('prdImagen')); // obj
        //dd($request->hasFile('prdImagen')); // bool
        if ( $request->hasFile('prdImagen') ) {
            // nombre del archivo
            //$prdImagen = $request->file('prdImagen')->getClientOriginalName();
            $prdImagen = time().'.'.$request->file('prdImagen')
                                        ->getClientOriginalExtension();
            // copia archivo
            $request->file('prdImagen')
                        ->move( public_path('/imgs/productos'), $prdImagen );

        }
        return $prdImagen;
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store( ProductoRequest $request )
    {
        $prdNombre = $request->prdNombre;
        $prdImagen = $this->subirImagen($request);
        try {
            $producto = new Producto;
            // asignamos atributos
            $producto->prdNombre = $prdNombre;
            $producto->prdPrecio = $request->prdPrecio;
            $producto->idMarca = $request->idMarca;
            $producto->idCategoria = $request->idCategoria;
            $producto->prdDescripcion = $request->prdDescripcion;
            $producto->prdImagen = $prdImagen;
        }
        catch( Throwable $th ){
            return redirect('/productos')
                ->with(
                    [
                        'mensaje'=>'No se pudo agregar el producto: '.$prdNombre,
                        'css'=>'red'
                    ]
                );
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
