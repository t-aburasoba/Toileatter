<?php

use Illuminate\Database\Seeder;

class StationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stations')->insert([
            
            ['name' => '田町',
            'route_id'=> '1',
            ],

            ['name' => '秋葉原',
            'route_id'=> '1',
            ],

            ['name' => '新宿',
            'route_id'=> '1',
            ],

            ['name' => '上野',
            'route_id'=> '1',
            ],

            ['name' => '東京',
            'route_id'=> '1',
            ],

            ['name' => '神田',
            'route_id'=> '1',
            ],
            ['name' => '田端',
            'route_id'=> '1',
            ],
            ['name' => '西日暮里',
            'route_id'=> '1',
            ],
            ['name' => '日暮里',
            'route_id'=> '1',
            ],
            ['name' => '鶯谷',
            'route_id'=> '1',
            ],
            ['name' => '有楽町',
            'route_id'=> '1',
            ],
            ['name' => '御徒町',
            'route_id'=> '1',
            ],
            ['name' => '新橋',
            'route_id'=> '1',
            ],
            ['name' => '浜松町',
            'route_id'=> '1',
            ],
            ['name' => '品川',
            'route_id'=> '1',
            ],
            ['name' => '大崎',
            'route_id'=> '1',
            ],
            ['name' => '五反田',
            'route_id'=> '1',
            ],
            ['name' => '目黒',
            'route_id'=> '1',
            ],
            ['name' => '恵比寿',
            'route_id'=> '1',
            ],
            ['name' => '渋谷',
            'route_id'=> '1',
            ],
            ['name' => '原宿',
            'route_id'=> '1',
            ],
            ['name' => '代々木',
            'route_id'=> '1',
            ],
            ['name' => '新大久保',
            'route_id'=> '1',
            ],
            ['name' => '高田馬場',
            'route_id'=> '1',
            ],
            ['name' => '目白',
            'route_id'=> '1',
            ],
            ['name' => '池袋',
            'route_id'=> '1',
            ],
            ['name' => '大塚',
            'route_id'=> '1',
            ],
            ['name' => '巣鴨',
            'route_id'=> '1',
            ],
            ['name' => '駒込',
            'route_id'=> '1',
            ],
        ]);
    }
}
