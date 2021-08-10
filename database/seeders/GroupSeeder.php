<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
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
            'name'      =>  'Pastoral da Crisma',
            'history'   =>  'a historia é....',
            'link'      =>  '@instagram',
            'user_id'   =>  3,
            'image_id'  =>  1,
        ];
        $dados2 = [
            'name'      =>  'Pastoral da Pessoa Idosa',
            'history'   =>  'a historia é....',
            'link'      =>  '@instagram',
            'user_id'   =>  3,
            'image_id'  =>  2,
        ];
        $dados3 = [
            'name'      =>  'Pastoral da Sobriedade',
            'history'   =>  'a historia é....',
            'link'      =>  '@instagram',
            'user_id'   =>  3,
            'image_id'  =>  3,
        ];
        Group::create($dados1);
        echo "Grupo 1 criado com sucesso \n";
        Group::create($dados2);
        echo "Grupo 2 criado com sucesso \n";
        Group::create($dados3);
        echo "Grupo 3 criado com sucesso \n";



    }
}
