<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Photo;

class PhotoSeeder extends Seeder
{
    public function run(): void
    {
        $photos = [

            ['city_id' => 1, 'image' => 'cities/barcelona1.jpg', 'caption' => 'Vista de Barcelona'],
            ['city_id' => 1, 'image' => 'cities/barcelona2.jpg', 'caption' => 'Arquitetura de Gaudí'],
            ['city_id' => 1, 'image' => 'cities/barcelona3.jpg', 'caption' => 'Praia de Barceloneta'],

            ['city_id' => 2, 'image' => 'cities/kyoto1.jpg', 'caption' => 'Templo histórico'],
            ['city_id' => 2, 'image' => 'cities/kyoto2.jpg', 'caption' => 'Jardins tradicionais'],
            ['city_id' => 2, 'image' => 'cities/kyoto3.jpg', 'caption' => 'Santuário Fushimi Inari'],

            ['city_id' => 3, 'image' => 'cities/newyork1.jpg', 'caption' => 'Times Square'],
            ['city_id' => 3, 'image' => 'cities/newyork2.jpg', 'caption' => 'Central Park'],
            ['city_id' => 3, 'image' => 'cities/newyork3.jpg', 'caption' => 'Estátua da Liberdade'],

            ['city_id' => 4, 'image' => 'cities/paris1.jpg', 'caption' => 'Torre Eiffel'],
            ['city_id' => 4, 'image' => 'cities/paris2.jpg', 'caption' => 'Arco do Triunfo'],
            ['city_id' => 4, 'image' => 'cities/paris3.jpg', 'caption' => 'Museu do Louvre'],

            ['city_id' => 5, 'image' => 'cities/riodejaneiro1.jpg', 'caption' => 'Cristo Redentor'],
            ['city_id' => 5, 'image' => 'cities/riodejaneiro2.jpg', 'caption' => 'Pão de Açúcar'],
            ['city_id' => 5, 'image' => 'cities/riodejaneiro3.jpg', 'caption' => 'Copacabana'],
        ];

        foreach ($photos as $p) {
            Photo::create($p);
        }
    }
}
