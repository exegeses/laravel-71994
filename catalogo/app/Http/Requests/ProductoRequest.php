<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProductoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(Request $request): array
    {
        return [
                //'prdNombre' => 'required|unique:productos,prdNombre|min:3|max:75',
                'prdNombre'=>'required|'.Rule::unique('productos')->ignore($request->idProducto).'|min:3|max:75',
                'prdPrecio' => 'required|numeric|min:0',
                'idMarca'=>'required|exists:marcas,idMarca',
                'idCategoria' => 'required|exists:categorias,idCategoria',
                'prdDescripcion' => 'required|max:1000',
                'prdImagen'=> 'mimes:jpg,jpeg,png,gif,svg,webp|max:3072'
        ];
    }

    public function messages() : array
    {
        return [
            'prdNombre.required'=>'El campo "Nombre de producto" es obligatorio.',
            'prdNombre.unique'=>'El "Nombre de producto" ya existe.',
            'prdNombre.min'=>'El campo "Nombre de producto" debe tener como mínimo 3 caractéres.',
            'prdNombre.max'=>'El campo "Nombre de producto" debe tener 75 caractéres como máximo.',
            'prdPrecio.required'=>'Complete el campo Precio.',
            'prdPrecio.numeric'=>'Complete el campo Precio con un número.',
            'prdPrecio.min'=>'Complete el campo Precio con un número mayor a 0.',
            'idMarca.required'=>'Seleccione una marca.',
            'idMarca.exists'=>'Seleccione una marca existente',
            'idCategoria.required'=>'Seleccione una categoría.',
            'idCategoria.exists'=>'Seleccione una categoría existente',
            'prdDescripcion.max'=>'Complete el campo Descripción con 1000 caractéres como máximo.',
            'prdDescripcion.required'=>'Complete el campo Descripción',
            'prdImagen.mimes'=>'Debe ser una imagen.',
            'prdImagen.max'=>'Debe ser una imagen de 3MB como máximo.'
        ];
    }
}
