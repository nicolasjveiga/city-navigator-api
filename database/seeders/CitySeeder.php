<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;

class CitySeeder extends Seeder
{
    public function run(): void
    {
        $cities = [
            [
                'name' => 'Barcelona',
                'country' => 'Espanha',
                'average_rating' => 0,
                'review_count' => 0,
                'description' =>
                    'Barcelona é uma cidade vibrante conhecida por sua arquitetura única de Antoni Gaudí, praias ensolaradas e uma vida cultural intensa. Suas ruas combinam história, arte e gastronomia, oferecendo uma experiência rica que mistura o charme medieval do Bairro Gótico com a modernidade da Avenida Diagonal.',
            ],
            [
                'name' => 'Kyoto',
                'country' => 'Japão',
                'average_rating' => 0,
                'review_count' => 0,
                'description' =>
                    'Kyoto é uma das cidades mais históricas do Japão, famosa por seus templos budistas, jardins tradicionais, santuários xintoístas e casas de madeira preservadas. Foi a capital imperial por mais de mil anos e ainda hoje mantém uma atmosfera cultural única, misturando tradição e modernidade.',
            ],
            [
                'name' => 'Nova York',
                'country' => 'Estados Unidos',
                'average_rating' => 0,
                'review_count' => 0,
                'description' =>
                    'Nova York é uma metrópole icônica conhecida por seus arranha-céus, diversidade cultural, museus renomados e a famosa Times Square. É um centro global de arte, moda, gastronomia e negócios.',
            ],
            [
                'name' => 'Paris',
                'country' => 'França',
                'average_rating' => 0,
                'review_count' => 0,
                'description' =>
                    'Paris é famosa por sua elegância, história, museus como o Louvre, monumentos como a Torre Eiffel e suas charmosas ruas repletas de cafés. Considerada a cidade do amor, é um dos destinos turísticos mais visitados do mundo.',
            ],
            [
                'name' => 'Rio de Janeiro',
                'country' => 'Brasil',
                'average_rating' => 0,
                'review_count' => 0,
                'description' =>
                    'O Rio de Janeiro é conhecido por suas paisagens naturais exuberantes, praias icônicas como Copacabana, o Cristo Redentor e o Pão de Açúcar. A cidade mistura natureza, cultura e um estilo de vida vibrante.',
            ],
        ];

        foreach ($cities as $city) {
            City::create($city);
        }
    }
}
