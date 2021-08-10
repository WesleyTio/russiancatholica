<?php

namespace Database\Seeders;

use App\Models\Ocupation;
use Illuminate\Database\Seeder;

class OcupationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $ocupation1=[
            'name' =>   'SuperAdmin'
        ];
        $ocupation2=[
            'name' =>   'Admin'
        ];
        $ocupation3=[
            'name' =>   'AdminCommunity'
        ];
        $ocupation4=[
            'name' =>   'AdminGroup'
        ];
        Ocupation::create($ocupation1);
        echo "ocupação 1 criada \n";
        Ocupation::create($ocupation2);
        echo "ocupação 2 criada \n";
        Ocupation::create($ocupation3);
        echo "ocupação 3 criada \n";
        Ocupation::create($ocupation4);
        echo "ocupação 4 criada \n";



    }
}
