<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producte;

class ProductesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productes = [
            [
                'nom_categoria' => "fruita",
                'descripcio_categoria' => "Hortalitzes del huerto collites Torredembarra",
            ],
            [
                'nom_categoria' => "carn",
                'descripcio_categoria' => "carn de gaïa la Riera",
            ],
            [ 
                'nom_categoria' => "peix",
                'descripcio_categoria' => "port de Torredembarra",
            ],
            [
                'nom_categoria' => "fruits secs",
                'descripcio_categoria' => "fruits del baix empordà",
            ],
        ];
        
        Producte::insert($productes);

    }
}
