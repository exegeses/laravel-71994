<?php

namespace Database\Seeders;

use App\Models\Marca;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Marca::insert(
            [
                [ 'mkNombre'=>'Apple' ],
                [ 'mkNombre'=>'Oppo' ],
                [ 'mkNombre'=>'Marshall' ],
                [ 'mkNombre'=>'iRobot' ],
                [ 'mkNombre'=>'Xiaomi' ],
                [ 'mkNombre'=>'Samsung' ],
                [ 'mkNombre'=>'Nikon' ],
                [ 'mkNombre'=>'Bose' ],
                [ 'mkNombre'=>'OnePlus' ],
                [ 'mkNombre'=>'Blaupunkt' ]
            ]
        );
    }
}
