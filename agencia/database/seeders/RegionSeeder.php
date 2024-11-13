<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('regiones')
                ->insert([
                    ['nombre' => 'América del Sur'],
                    ['nombre' => 'América Central'],
                    ['nombre' => 'Caribe y México'],
                    ['nombre' => 'América del Norte'],
                    ['nombre' => 'Europa Occidental'],
                    ['nombre' => 'Europa del Este'],
                    ['nombre' => 'Asia'],
                    ['nombre' => 'Oceanía']
                ]);
    }
}
