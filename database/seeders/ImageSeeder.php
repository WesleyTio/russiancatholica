<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
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
            'path'  => 'caminho1/image.jpg'
        ];
        $dados2 = [
            'path'  => 'caminho2/image.jpg'
        ];
        $dados3 = [
            'path'  => 'caminho3/image.jpg'
        ];
        $dados4 = [
            'path'  => 'caminho4/image.jpg'
        ];
        $dados5 = [
            'path'  => 'caminho5/image.jpg'
        ];
        $dados6 = [
            'path'  => 'caminho6/image.jpg'
        ];
        $dados7 = [
            'path'  => 'caminho7/image.jpg'
        ];
        $dados8 = [
            'path'  => 'caminho8/image.jpg'
        ];
        $dados9 = [
            'path'  => 'caminho9/image.jpg'
        ];
        $dados10 = [
            'path'  => 'caminho10/image.jpg'
        ];
        $dados11 = [
            'path'  => 'caminho11/image.jpg'
        ];
        $dados12 = [
            'path'  => 'caminho12/image.jpg'
        ];

        Image::create($dados1);
        echo "Caminho 1 criado \n";

        Image::create($dados2);
        echo "Caminho 2 criado \n";

        Image::create($dados3);
        echo "Caminho 3 criado \n";

        Image::create($dados4);
        echo "Caminho 4 criado \n";

        Image::create($dados5);
        echo "Caminho 5 criado \n";

        Image::create($dados6);
        echo "Caminho 6 criado \n";

        Image::create($dados7);
        echo "Caminho 7 criado \n";

        Image::create($dados8);
        echo "Caminho 8 criado \n";

        Image::create($dados9);
        echo "Caminho 9 criado \n";

        Image::create($dados10);
        echo "Caminho 10 criado \n";

        Image::create($dados11);
        echo "Caminho 11 criado \n";

        Image::create($dados12);
        echo "Caminho 12 criado \n";
    }
}
