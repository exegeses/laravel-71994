<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Categoria;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::insert(
            [
                [ 'catNombre'=>'Smartphone' ],
                [ 'catNombre'=>'Parlantes Bluetooth' ],
                [ 'catNombre'=>'Robot de limpieza' ],
                [ 'catNombre'=>'Smat TV' ],
                [ 'catNombre'=>'Cámaras Mirrorless' ],
                [ 'catNombre'=>'Iluminación inteligente' ],
            ]
        );
    }
}
