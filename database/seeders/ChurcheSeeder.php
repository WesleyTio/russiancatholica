<?php

namespace Database\Seeders;

use App\Models\Church;
use Illuminate\Database\Seeder;

class ChurcheSeeder extends Seeder
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
            'name'          =>  'Igreja Nossa Senhora o Rosário',
            'latitude'      =>  '31.12346',
            'longitude'     =>  '31.12346',
            'holyperson_id' =>  1,
            'community_id'  =>  1,
            'image_id'      =>  6
        ];

        $dados2 = [
            'name'          =>  'Santuário Nossa Senhora de Fátima',
            'latitude'      =>  '31.12346',
            'longitude'     =>  '31.12346',
            'holyperson_id' =>  2,
            'community_id'  =>  2,
            'image_id'      =>  7
        ];

        $dados3 = [
            'name'          =>  'Capela de Santo Inácio',
            'latitude'      =>  '31.12346',
            'longitude'     =>  '31.12346',
            'holyperson_id' =>  3,
            'community_id'  =>  3,
            'image_id'      =>  8
        ];

        $dados4 = [
            'name'          =>  'Capela de Nossa senhora da saúde',
            'latitude'      =>  '31.12346',
            'longitude'     =>  '31.12346',
            'holyperson_id' =>  4,
            'community_id'  =>  4,
            'image_id'      =>  9
        ];

        Church::create($dados1);
        echo "Igreja 1 criada com sucesso\n";
        Church::create($dados2);
        echo "Igreja 2 criada com sucesso\n";
        Church::create($dados3);
        echo "Igreja 3 criada com sucesso\n";
        Church::create($dados4);
        echo "Igreja 4 criada com sucesso\n";

    }
}
