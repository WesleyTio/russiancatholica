<?php

namespace Database\Seeders;

use App\Models\Area;
use App\Models\Community;
use Illuminate\Database\Seeder;

class CommunitySeeder extends Seeder
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
            'name'      =>  'Centro',
            'history'   =>  'A hisotria é a que ....',
            'area_id'   =>  1,
            'user_id'   =>  1
        ];
        $dados2 = [
            'name'      =>  'Fátima',
            'history'   =>  'A hisotria é a que ....',
            'area_id'   =>  1,
            'user_id'   =>  2
        ];
        $dados3 = [
            'name'      =>  'Ingá',
            'history'   =>  'A hisotria é a que ....',
            'area_id'   =>  2,
            'user_id'   =>  3
        ];
        $dados4 = [
            'name'      =>  'Parelhas',
            'history'   =>  'A hisotria é a que ....',
            'area_id'   =>  3,
            'user_id'   =>  5
        ];

        Community::create($dados1);
        echo "Community 1 criada \n";
        Community::create($dados2);
        echo "Community 2 criada \n";
        Community::create($dados3);
        echo "Community 3 criada \n";
        Community::create($dados4);
        echo "Community 4 criada \n";
    }
}
