<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DestinoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('destinos')
                ->insert([
                    [
                        'aeropuerto'=>'Londres (Heathrow)',
                        'precio'=>9711,
                        'idRegion'=>5,
                        'activo'=>1
                    ],
                    [
                        'aeropuerto'=>'Amsterdam (Schiphol)',
                        'precio'=>6231,
                        'idRegion'=>5,
                        'activo'=>1
                    ],
                    [
                        'aeropuerto'=>'Miami (Wilcox Field)',
                        'precio'=>6517,
                        'idRegion'=>4,
                        'activo'=>1
                    ],
                    [
                        'aeropuerto'=>'Tokio (Narita)',
                        'precio'=>8704,
                        'idRegion'=>7,
                        'activo'=>1
                    ],
                    [
                        'aeropuerto'=>'Kuala Lumpur (KLIA)',
                        'precio'=>8570,
                        'idRegion'=>7,
                        'activo'=>1
                    ],
                    [
                        'aeropuerto'=>'Bangkok (Suvarnabhumi)',
                        'precio'=>8469,
                        'idRegion'=>7,
                        'activo'=>1
                    ],
                    [
                        'aeropuerto'=>'París (Charles de Gaulle)',
                        'precio'=>7713,
                        'idRegion'=>5,
                        'activo'=>1
                    ],
                    [
                        'aeropuerto'=>'Cancún (Cancún)',
                        'precio'=>6494,
                        'idRegion'=>3,
                        'activo'=>1
                    ],
                    [
                        'aeropuerto'=>'Milán (Malpensa)',
                        'precio'=>6756,
                        'idRegion'=>5,
                        'activo'=>1
                    ]
                ]);
    }
}
