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

        ]);
    }
}
