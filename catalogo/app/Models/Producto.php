<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $primaryKey = 'idProducto';
    public $timestamps = false;

    //Métodos de relación
    public function getMarca()
    {
        return $this->belongsTo(
                Marca::class,
            'idMarca',
            'idMarca'
        );
    }
    public function getCategoria() {
        return $this->belongsTo(
            Categoria::class,
            'idCategoria',
            'idCategoria'
        );
    }
}
