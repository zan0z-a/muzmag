<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        $goods = [
            [
                'title' => 'Harley Benton TE-52 NA Vintage Series',
                'description' => 'Harley Benton TE-52 NA Vintage Series — это бюджетная электрогитара в стиле Telecaster, которая сочетает классический винтажный вид и звук с хорошей играбельностью благодаря корпусу из американского ясеня и грифу из карамелизированного клена, оснащенная двумя синглами Roswell TEA Alnico-5 для яркого и чистого тона, что делает ее отличным выбором для новичков и любителей ретро-звучания.',
                'img' => 'harley_benton.jpg',
                'price' => 15774,
                'category' => 'Электрогитары',
                'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => DB::raw('CURRENT_TIMESTAMP')
            ],
            [
                'title' => 'Limited Edition Paranormal Strat-O-Sonic',
                'description' => 'Squier Paranormal Strat-O-Sonic — это лимитированная серия гитар, возрождающая редкую модель конца 90-х/начала 2000-х от Fender, сочетающая узнаваемый корпус Stratocaster с элементами Gibson Les Paul Special: корпус из окуме, мензура 24.75" как у Les Paul, гриф из клёна с лавровой накладкой и звукосниматели типа P-90 (Alnico Soapbar Single-Coils), а также необычные функции, такие как push/pull ручка для переключения звукоснимателей, что дает уникальное звучание.',
                'img' => 'strat_o_sonic.jpg',
                'price' => 39210,
                'category' => 'Электрогитары',
                'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => DB::raw('CURRENT_TIMESTAMP')
            ],
            [
                'title' => 'Limited Edition Vintera® II Road Worn® \'60s Telecaster',
                'description' => 'Limited Edition Vintera® II Road Worn® \'60s Telecaster — это винтажная электрогитара в стиле 60-х, произведенная в Мексике, с деликатным эффектом состаривания (легкий кракелюр) для создания ощущения старой, но бережно хранившейся гитары, оснащенная аутентичными звукоснимателями и удобным грифом с радиусом 7,25" для "золотой эры" Fender.',
                'img' => 'telecaster_fender.webp',
                'price' => 144130,
                'category' => 'Электрогитары',
                'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => DB::raw('CURRENT_TIMESTAMP')
            ],
            [
                'title' => 'ARIA STB-PB/B WH',
                'description' => 'Aria STB-PB/B WH (белый) — это бюджетная четырехструнная бас-гитара серии STB от японского бренда Aria, выполненная в классическом стиле «Стратокастер» (Stratocaster), с корпусом из липы, кленовым грифом на болтах и накладкой из ореха (или палисандра, в зависимости от партии), с 21 ладом. Она оснащена пассивным звукоснимателем OP-1 Double Coil, ручками громкости (2) и тона (1), хромированной фурнитурой и предназначена для начинающих и любителей, предлагая хорошее качество звука и удобство за свою цену, часто с черной пикгард-планкой.',
                'img' => 'aria.webp',
                'price' => 20990,
                'category' => 'Бас-гитары',
                'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => DB::raw('CURRENT_TIMESTAMP')
            ],
            [
                'title' => 'Clevan CB-42',
                'description' => 'Clevan CB-42 – это доступная 4-струнная бас-гитара для начинающих, featuring корпус из агатиса, кленовый гриф с палисандровой накладкой и болтовым креплением, мензуру 864 мм, два хамбакера (2HB) и активный эквалайзер (2-полосный EQ) для гибкой настройки звука, с колками черного никеля.',
                'img' => 'clevan.jpg',
                'price' => 19900,
                'category' => 'Бас-гитары',
                'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => DB::raw('CURRENT_TIMESTAMP')
            ],
            [
                'title' => 'HOMAGE LF-4123',
                'description' => 'HOMAGE LF-4123 — это доступная 6-струнная акустическая гитара формы Дредноут (Dreadnought) с натуральной расцветкой, предназначенная в первую очередь для начинающих и любителей, сочетающая комфортную игру и яркое, насыщенное звучание. Она имеет корпус из ламинированной ели (верхняя дека) и сапеле, гриф из нато/эвкалипта с палисандровой накладкой, а также надежную колковую механику для хорошего строя.',
                'img' => 'homage.jpg',
                'price' => 9500,
                'category' => 'Акустические гитары',
                'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => DB::raw('CURRENT_TIMESTAMP')
            ],
            [
                'title' => 'Yamaha F310',
                'description' => 'Yamaha F310 - это популярная 6-струнная акустическая гитара вестерн-типа (дредноут), идеальная для начинающих, известная своим качеством, ярким звучанием и доступной ценой, благодаря комбинации еловой верхней деки и корпуса из красного дерева/меранти, удобному тонкому грифу и комфортной высоте струн.',
                'img' => 'f310.jpg',
                'price' => 16890,
                'category' => 'Акустические гитары',
                'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => DB::raw('CURRENT_TIMESTAMP')
            ],
            [
                'title' => 'YAMAHA PSR-A350',
                'description' => 'YAMAHA PSR-A350 — это интерактивный синтезатор с автоаккомпанементом, ориентированный на восточную музыку, с 61 чувствительной к касанию клавишей, богатой библиотекой из 613 тембров (включая 45 восточных) и 210 стилей (115 восточных), с функцией настройки лада, арпеджиатором и AUX IN с подавителем мелодии для практики; он предлагает реалистичные восточные звуки и ритмы, что делает его идеальным для любителей этнической музыки, с возможностью подключения к iOS-устройствам.',
                'img' => 'a350.jpg',
                'price' => 45590,
                'category' => 'Синтезаторы',
                'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => DB::raw('CURRENT_TIMESTAMP')
            ],
            [
                'title' => 'Yamaha Stage Custom Birch 5-Piece Shell Pack',
                'description' => 'Yamaha Stage Custom Birch 5-Piece Shell Pack - это популярный 5-компонентный набор акустических барабанов, ценимый за высокое качество звука и доступность, изготовленный из 100% березовых корпусов, который обеспечивает мощное, чистое звучание и отлично подходит как новичкам, так и профессионалам, благодаря надежной конструкции и улучшенным деталям, таким как фиксаторы на ножках бас-барабана.',
                'img' => 'stagecuston.webp',
                'price' => 146290,
                'category' => 'Барабаны',
                'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => DB::raw('CURRENT_TIMESTAMP')
            ]
        ];

        DB::table('goods')->insert($goods);
    }

    public function down(): void
    {
        
    }
};