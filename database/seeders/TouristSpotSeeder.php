<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;
use App\Models\TouristSpot;

class TouristSpotSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            'Barcelona' => [
                [
                    'name' => 'Sagrada Família',
                    'description' => 'A famosa basílica projetada por Antoni Gaudí, símbolo máximo de Barcelona.',
                    'latitude' => 41.4036,
                    'longitude' => 2.1744,
                ],
                [
                    'name' => 'Parque Güell',
                    'description' => 'Um parque colorido e artístico com mosaicos e vistas incríveis da cidade.',
                    'latitude' => 41.4145,
                    'longitude' => 2.1527,
                ],
                [
                    'name' => 'La Rambla',
                    'description' => 'A avenida mais famosa da cidade, cheia de vida, mercados e artistas de rua.',
                    'latitude' => 41.3809,
                    'longitude' => 2.1730,
                ],
            ],

            'Kyoto' => [
                [
                    'name' => 'Fushimi Inari Taisha',
                    'description' => 'Santuário icônico com milhares de torii vermelhos formando túneis mágicos.',
                    'latitude' => 34.9671,
                    'longitude' => 135.7727,
                ],
                [
                    'name' => 'Kinkaku-ji (Pavilhão Dourado)',
                    'description' => 'Templo zen com exterior folheado a ouro, rodeado por um belo lago.',
                    'latitude' => 35.0394,
                    'longitude' => 135.7292,
                ],
                [
                    'name' => 'Arashiyama Bamboo Grove',
                    'description' => 'O famoso bosque de bambu que cria um corredor natural impressionante.',
                    'latitude' => 35.0094,
                    'longitude' => 135.6668,
                ],
            ],

            'Nova York' => [
                [
                    'name' => 'Estátua da Liberdade',
                    'description' => 'Um dos monumentos mais icônicos do mundo e símbolo de liberdade.',
                    'latitude' => 40.6892,
                    'longitude' => -74.0445,
                ],
                [
                    'name' => 'Central Park',
                    'description' => 'Um oásis urbano com lagos, trilhas e grandes áreas verdes.',
                    'latitude' => 40.7851,
                    'longitude' => -73.9683,
                ],
                [
                    'name' => 'Times Square',
                    'description' => 'Cruzamento famoso por seus letreiros luminosos e movimento constante.',
                    'latitude' => 40.7580,
                    'longitude' => -73.9855,
                ],
            ],

            'Paris' => [
                [
                    'name' => 'Torre Eiffel',
                    'description' => 'O monumento mais famoso do mundo, símbolo da França.',
                    'latitude' => 48.8584,
                    'longitude' => 2.2945,
                ],
                [
                    'name' => 'Museu do Louvre',
                    'description' => 'O maior museu de arte do mundo, lar da Mona Lisa.',
                    'latitude' => 48.8606,
                    'longitude' => 2.3376,
                ],
                [
                    'name' => 'Catedral de Notre-Dame',
                    'description' => 'Catedral gótica histórica localizada na Île de la Cité.',
                    'latitude' => 48.8530,
                    'longitude' => 2.3499,
                ],
            ],

            'Rio de Janeiro' => [
                [
                    'name' => 'Cristo Redentor',
                    'description' => 'Uma das Sete Maravilhas do Mundo, no topo do Morro do Corcovado.',
                    'latitude' => -22.9519,
                    'longitude' => -43.2105,
                ],
                [
                    'name' => 'Pão de Açúcar',
                    'description' => 'Ponto turístico famoso com bondinho e vistas impressionantes.',
                    'latitude' => -22.9486,
                    'longitude' => -43.1566,
                ],
                [
                    'name' => 'Copacabana',
                    'description' => 'Uma das praias mais famosas do mundo, cartão-postal do Brasil.',
                    'latitude' => -22.9711,
                    'longitude' => -43.1822,
                ],
            ],
        ];

        foreach ($data as $cityName => $spots) {
            $city = City::where('name', $cityName)->first();

            if (!$city) {
                continue;
            }

            foreach ($spots as $spot) {
                TouristSpot::create([
                    'city_id'        => $city->id,
                    'name'           => $spot['name'],
                    'description'    => $spot['description'],
                    'average_rating' => 0,
                    'review_count'   => 0,
                    'latitude'       => $spot['latitude'],
                    'longitude'      => $spot['longitude'],
                ]);
            }
        }
    }
}
