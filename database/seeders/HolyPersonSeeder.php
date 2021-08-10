<?php

namespace Database\Seeders;

use App\Models\Holyperson;
use Illuminate\Database\Seeder;

class HolyPersonSeeder extends Seeder
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
            'name'          =>  'Nossa Senhora do Rosário',
            'history'       =>  'A histoatia é que.....',
            'memorian_date' =>  '1591-06-10'
        ];
        
        $dados2 = [
            'name'          =>  'Nossa Senhora de Fátima',
            'history'       =>  'A histoatia é que.....',
            'memorian_date' =>  '1591-06-10'
        ];

        $dados3 = [
            'name'          =>  'Santo Inácio',
            'history'       =>  'A histoatia é que.....',
            'memorian_date' =>  '1591-07-31'
        ];

        $dados4 = [
            'name'          =>  'Nossa Senhora da Saúde',
            'history'       =>  'A histoatia é que.....',
            'memorian_date' =>  '1591-06-10'
        ];

        Holyperson::create($dados1);
        echo "santo 1 add com sucesso \n";

        Holyperson::create($dados2);
        echo "santo 2 add com sucesso \n";

        Holyperson::create($dados3);
        echo "santo 3 add com sucesso \n";

        Holyperson::create($dados4);
        echo "santo 4 add com sucesso \n";



    }
}
