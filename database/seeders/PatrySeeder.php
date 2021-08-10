<?php

namespace Database\Seeders;

use App\Models\Patry;
use Illuminate\Database\Seeder;

class PatrySeeder extends Seeder
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
            'theme'         =>  'O tema é o que... Rosario',
            'date_init'     =>  '2021-06-1',
            'date_final'    =>  '2021-06-8',
            'church_id'     =>  1,
            'image_id'      =>  10
        ];
        $dados2 = [
            'theme'         =>  'O tema é o que... Fatima',
            'date_init'     =>  '2021-06-9',
            'date_final'    =>  '2021-06-16',
            'church_id'     =>  2,
            'image_id'      =>  11
        ];
        $dados3 = [
            'theme'         =>  'O tema é o que... Inacio',
            'date_init'     =>  '2021-06-17',
            'date_final'    =>  '2021-06-24',
            'church_id'     =>  3,
            'image_id'      =>  12
        ];


        Patry::create($dados1);
        echo "Festa 1 criada \n";
        Patry::create($dados2);
        echo "Festa 2 criada \n";
        Patry::create($dados3);
        echo "Festa 3 criada \n";

    }
}
