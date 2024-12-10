<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Obtenemos el listado de marcas
        //$marcas = Marca::all();
        //$marcas = Marca::orderBy('idMarca', 'desc')->get();
        $marcas = Marca::orderBy('idMarca', 'desc')->paginate(6);
        //Retornamos la vista marcas pasándole el listado de marcas
        return view('marcas', [ 'marcas'=>$marcas ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('marcaCreate');
    }

    private function validarMarca(Request $request)
    {
        $request->validate(
            //['campo'=>'regla1|regla2|regla3'|], ['campo.regla'=>'mensaje']
            [ 'mkNombre' => 'required|unique:marcas,mkNombre|min:2|max:45' ],
            [
                'mkNombre.required'=>'Complete el campo "Nombre de la marca"',
                'mkNombre.unique'=>'Ya existe una marca con ese nombre',
                'mkNombre.min'=>'El campo "Nombre de la marca" debe tener al menos 2 caractéres',
                'mkNombre.max'=>'El campo "Nombre de la marca" debe tener 45 caractéres como máximo'
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Capturamos dato enviado por el formulario
        $mkNombre = $request->mkNombre;
        // validación
        $this->validarMarca($request);
        try {
            //instanciamos
            $marca = new Marca;
            //Asignamos atributos
            $marca->mkNombre = $mkNombre;
            //Almacenamos en tabla
            $marca->save();
            return redirect('/marcas')
                ->with(
                    [
                        'mensaje'=>'Marca '.$mkNombre.' creada exitosamente',
                        'css'=>'green'
                    ]
                );
        }catch( Throwable $th ){
            return redirect('/marcas')
                ->with(
                    [
                        'mensaje'=>'No se pudo crear la marca: '.$mkNombre,
                        'css'=>'red'
                    ]
                );
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Marca $marca)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Marca $marca)
    //public function edit(string $id)
    {
        //Obtenemos los datos de una marca filtrada por su ID
        /*$marca = Marca::where('idMarca',$id)
                            ->first();*/
        //$marca = Marca::find($id);
        return view('marcaEdit', ['marca'=>$marca]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Marca $marca)
    {
        $mkNombre = $request->mkNombre;
        $idMarca = $request->idMarca;
        $this->validarMarca($request);
        try {
            // $marca = Marca::find($idMarca);
            // asignamos atributo modificando valores
            $marca->mkNombre = $mkNombre;
            $marca->save();
            return redirect('/marcas')
                ->with(
                    [
                        'mensaje'=>'Marca '.$marca->mkNombre.' modificada exitosamente',
                        'css'=>'green'
                    ]
                );
        }
        catch ( Throwable $th ){
                return redirect('/marcas')->with([
                    'mensaje' => 'Error al modificar la marca.',
                    'css' => 'red'
                ]);
        }
    }

    private function checkProductoPorMarca( int $idMarca )
    {
        // objeto | NULL
        /* $check = DB::table('productos')
                    ->where('idMarca', $idMarca)->first(); */
        // int
        $count = DB::table('productos')
                    ->where('idMarca', $idMarca)->count();
        return $count;
    }

    public function delete(Marca $marca)
    {
        //vericar
        if( Producto::checkProductoPorMarca($marca->idMarca) ){
            return redirect('/marcas')
                    ->with(
                        [
                            'mensaje'=>'No se puede eliminar la marca: '.$marca->mkNombre.' ya que tiene productos relacionados',
                            'css'=>'yellow'
                        ]
                    );
        }
        return view('marcaDelete', [ 'marca'=>$marca ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Marca $marca)
    {
        //
    }
}
