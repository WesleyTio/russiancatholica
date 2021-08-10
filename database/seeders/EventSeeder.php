<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
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
            'name'          =>  'Crisma de Fátima',
            'date_init'     =>  '2021-07-01',
            'date_final'    =>  '2021-07-03',
            'group_id'      =>  1,
            'image_id'      =>  4
        ];
        $dados2 = [
            'name'          =>  'Festa dos Idosos',
            'date_init'     =>  '2021-07-04',
            'date_final'    =>  '2021-07-05',
            'group_id'      =>  2,
            'image_id'      =>  5
        ];

        Event::create($dados1);
        echo "evento 1 criado \n";

        Event::create($dados2);
        echo "evento 2 criado \n";

    }
}
