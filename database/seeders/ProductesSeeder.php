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
                'nom_categoria' => "fruïta",
                'descripcio_categoria' => "Hortalitzes del huerto collites Torredembarra",
                'categoria_filla'=> "pomes",
                'quantitat' => 500,
            ],
            [
                'nom_categoria' => "carn",
                'descripcio_categoria' => "carn de la Riera de Gaïa",
                'categoria_filla'=> "porc",
                'quantitat' => 30,
            ],
            [ 
                'nom_categoria' => "peix",
                'descripcio_categoria' => "port de Torredembarra",
                'categoria_filla'=> "bacallà",
                'quantitat' => 60,
            ],
            [
                'nom_categoria' => "fruïts secs",
                'descripcio_categoria' => "fruits del Baix Empordà",
                'categoria_filla'=> "nous",
                'quantitat' => 300,
            ],
            [
                'nom_categoria' => "cereals",
                'descripcio_categoria' => "cooperativa de Prades",
                'categoria_filla'=> "cebada",
                'quantitat' => 600,
            ],
            [
                'nom_categoria' => "verdura",
                'descripcio_categoria' => "distribuïdor del delta del Ebre",
                'categoria_filla'=> "faves",
                'quantitat' => 200,
            ],
            [
                'nom_categoria' => "verdura",
                'descripcio_categoria' => "distribuïdor del delta del Ebre",
                'categoria_filla'=> "brocoli",
                'quantitat' => 400,
            ],        
            [
                'nom_categoria' => "verdura",
                'descripcio_categoria' => "distribuïdor del delta del Ebre",
                'categoria_filla'=> "espinacs",
                'quantitat' => 500,
            ],
            [
                'nom_categoria' => "verdura",
                'descripcio_categoria' => "distribuïdor del delta del Ebre",
                'categoria_filla'=> "pèsols",
                'quantitat' => 300,
            ],
        
        ];
        
        Producte::insert($productes);

    }
}
