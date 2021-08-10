<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $dados1 = [
            'name'  =>  'centro'
        ];

        $dados2 = [
            'name'  =>  'Ingá'
        ];

        $dados3 = [
            'name'  =>  'Pitombeira'
        ];

        Area::create($dados1);
        echo "area 1 criada \n";
        Area::create($dados2);
        echo "area 2 criada \n";
        Area::create($dados3);
        echo "area 3 criada \n";


    }
}
