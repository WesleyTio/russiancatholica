<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
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
            'name'          =>      'José Wesley',
            'email'         =>      'wesleymagnos@hotmail.com',
            'password'      =>      Hash::make('123456'),
            'ocupation_id'  =>      1
        ];

        $dados2 = [
            'name'          =>      'Wesley Admin',
            'email'         =>      'wesleymagnos@admin.com',
            'password'      =>      Hash::make('123456'),
            'ocupation_id'  =>      2
        ];

        $dados3 = [
            'name'          =>      'José AdminCommunity',
            'email'         =>      'josemagnos@community.com',
            'password'      =>      Hash::make('123456'),
            'ocupation_id'  =>      3
        ];

        $dados4 = [
            'name'          =>      'Wesley AdminGroup',
            'email'         =>      'wesleymagnos@group.com',
            'password'      =>      Hash::make('123456'),
            'ocupation_id'  =>      4
        ];

        $dados5 = [
            'name'          =>      'Wesley AdminCommunity',
            'email'         =>      'wesleymagnos@community.com',
            'password'      =>      Hash::make('123456'),
            'ocupation_id'  =>      3
        ];
        User::create($dados1);
        echo "usuario 1 criado \n";
        User::create($dados2);
        echo "usuario 2 criado \n";
        User::create($dados3);
        echo "usuario 3 criado \n";
        User::create($dados4);
        echo "usuario 4 criado \n";
        User::create($dados5);
        echo "usuario 5 criado \n";


    }
}
