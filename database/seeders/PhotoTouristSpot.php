<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TouristSpot;
use App\Models\Photos\PhotoTouristSpot;

class PhotoTouristSpotSeeder extends Seeder
{
    public function run(): void
    {
        $photos = [
            // --- Barcelona ---
            ['spot' => 'Sagrada Família',     'image' => 'spots/sagrada1.jpg',   'caption' => 'Fachada da Sagrada Família'],
            ['spot' => 'Sagrada Família',     'image' => 'spots/sagrada2.jpg',   'caption' => 'Interior da basílica'],
            ['spot' => 'Sagrada Família',     'image' => 'spots/sagrada3.jpg',   'caption' => 'Vista aérea do templo'],

            ['spot' => 'Parque Güell',        'image' => 'spots/guell1.jpg',     'caption' => 'Entrada do Parque Güell'],
            ['spot' => 'Parque Güell',        'image' => 'spots/guell2.jpg',     'caption' => 'Escadaria com mosaicos'],
            ['spot' => 'Parque Güell',        'image' => 'spots/guell3.jpg',     'caption' => 'Vista panorâmica'],

            ['spot' => 'La Rambla',           'image' => 'spots/rambla1.jpg',    'caption' => 'Movimento na La Rambla'],
            ['spot' => 'La Rambla',           'image' => 'spots/rambla2.jpg',    'caption' => 'Mercado La Boqueria'],
            ['spot' => 'La Rambla',           'image' => 'spots/rambla3.jpg',    'caption' => 'Artistas de rua'],

            // --- Kyoto ---
            ['spot' => 'Fushimi Inari Taisha','image' => 'spots/inari1.jpg',     'caption' => 'Torii vermelhos'],
            ['spot' => 'Fushimi Inari Taisha','image' => 'spots/inari2.jpg',     'caption' => 'Entrada do santuário'],
            ['spot' => 'Fushimi Inari Taisha','image' => 'spots/inari3.jpg',     'caption' => 'Trilhas entre os torii'],

            ['spot' => 'Kinkaku-ji (Pavilhão Dourado)', 'image' => 'spots/kinkaku1.jpg', 'caption' => 'Pavilhão Dourado refletindo no lago'],
            ['spot' => 'Kinkaku-ji (Pavilhão Dourado)', 'image' => 'spots/kinkaku2.jpg', 'caption' => 'Jardins zen ao redor'],
            ['spot' => 'Kinkaku-ji (Pavilhão Dourado)', 'image' => 'spots/kinkaku3.jpg', 'caption' => 'Vista frontal do templo'],

            ['spot' => 'Arashiyama Bamboo Grove','image' => 'spots/arashiyama1.jpg','caption' => 'Trilha de bambus'],
            ['spot' => 'Arashiyama Bamboo Grove','image' => 'spots/arashiyama2.jpg','caption' => 'Bosque visto de baixo'],
            ['spot' => 'Arashiyama Bamboo Grove','image' => 'spots/arashiyama3.jpg','caption' => 'Caminho entre os bambus'],

            // --- Nova York ---
            ['spot' => 'Estátua da L    iberdade', 'image' => 'spots/liberty1.jpg',   'caption' => 'Estátua da Liberdade vista da balsa'],
            ['spot' => 'Estátua da Liberdade', 'image' => 'spots/liberty2.jpg',   'caption' => 'Pedestal da estátua'],
            ['spot' => 'Estátua da Liberdade', 'image' => 'spots/liberty3.jpg',   'caption' => 'Vista aérea da ilha'],

            ['spot' => 'Central Park',         'image' => 'spots/central1.jpg',   'caption' => 'Lagos do Central Park'],
            ['spot' => 'Central Park',         'image' => 'spots/central2.jpg',   'caption' => 'Trilhas arborizadas'],
            ['spot' => 'Central Park',         'image' => 'spots/central3.jpg',   'caption' => 'Vista do parque com arranha-céus'],

            ['spot' => 'Times Square',         'image' => 'spots/times1.jpg',     'caption' => 'Painéis luminosos de Times Square'],
            ['spot' => 'Times Square',         'image' => 'spots/times2.jpg',     'caption' => 'Movimento noturno'],
            ['spot' => 'Times Square',         'image' => 'spots/times3.jpg',     'caption' => 'Cruzamento principal'],

            // --- Paris ---
            ['spot' => 'Torre Eiffel',         'image' => 'spots/eiffel1.jpg',    'caption' => 'Torre Eiffel ao pôr do sol'],
            ['spot' => 'Torre Eiffel',         'image' => 'spots/eiffel2.jpg',    'caption' => 'Vista de baixo da estrutura'],
            ['spot' => 'Torre Eiffel',         'image' => 'spots/eiffel3.jpg',    'caption' => 'Vista noturna iluminada'],

            ['spot' => 'Museu do Louvre',      'image' => 'spots/louvre1.jpg',    'caption' => 'Pirâmide do Louvre'],
            ['spot' => 'Museu do Louvre',      'image' => 'spots/louvre2.jpg',    'caption' => 'Corredores internos'],
            ['spot' => 'Museu do Louvre',      'image' => 'spots/louvre3.jpg',    'caption' => 'Fachada histórica'],

            ['spot' => 'Catedral de Notre-Dame','image' => 'spots/notredame1.jpg','caption' => 'Entrada da catedral'],
            ['spot' => 'Catedral de Notre-Dame','image' => 'spots/notredame2.jpg','caption' => 'Vitrais internos'],
            ['spot' => 'Catedral de Notre-Dame','image' => 'spots/notredame3.jpg','caption' => 'Vista lateral da catedral'],

            // --- Rio de Janeiro ---
            ['spot' => 'Cristo Redentor',       'image' => 'spots/cristo1.jpg',   'caption' => 'Cristo visto de frente'],
            ['spot' => 'Cristo Redentor',       'image' => 'spots/cristo2.jpg',   'caption' => 'Vista do Corcovado'],
            ['spot' => 'Cristo Redentor',       'image' => 'spots/cristo3.jpg',   'caption' => 'Vista aérea'],

            ['spot' => 'Pão de Açúcar',         'image' => 'spots/pao1.jpg',      'caption' => 'Bondinho subindo o Pão de Açúcar'],
            ['spot' => 'Pão de Açúcar',         'image' => 'spots/pao2.jpg',      'caption' => 'Topo do Pão de Açúcar'],
            ['spot' => 'Pão de Açúcar',         'image' => 'spots/pao3.jpg',      'caption' => 'Vista para a baía'],

            ['spot' => 'Copacabana',            'image' => 'spots/copa1.jpg',     'caption' => 'Calçadão de Copacabana'],
            ['spot' => 'Copacabana',            'image' => 'spots/copa2.jpg',     'caption' => 'Praia cheia'],
            ['spot' => 'Copacabana',            'image' => 'spots/copa3.jpg',     'caption' => 'Vista aérea da praia'],
        ];

        foreach ($photos as $p) {
            $spot = TouristSpot::where('name', $p['spot'])->first();

            if (!$spot) {
                continue;
            }

            PhotoTouristSpot::create([
                'tourist_spot_id' => $spot->id,
                'image' => $p['image'],
                'caption' => $p['caption'],
            ]);
        }
    }
}
