<?php

use Illuminate\Database\Seeder;

class ToiletsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('toilets')->insert([

            ['toilet_name' => '秋葉原駅西口',
            'closet_bowl_number' => '5',
            'toilet_image_name'=> 'mirror.jpeg',
            'latitude'=>'36',
            'longtitude' => '140',
            'station_id' => '11',
            ],

            ['toilet_name' => '新宿駅西口',
            'closet_bowl_number' => '6',
            'toilet_image_name'=> 'restroom.jpeg',
            'latitude'=>'36',
            'longtitude' => '140',
            'station_id' => '21',
            ],

            ['toilet_name' => '田町駅',
            'closet_bowl_number' => '2',
            'toilet_image_name'=> 'bg.jpeg',
            'latitude'=>'36',
            'longtitude' => '140',
            'station_id' => '1',
            ],

            ['toilet_name' => '上野駅東口',
            'closet_bowl_number' => '4',
            'toilet_image_name'=> 'default.jpeg',
            'latitude'=>'36',
            'longtitude' => '140',
            'station_id' => '31',
            ],

            ['toilet_name' => '神田駅',
            'closet_bowl_number' => '4',
            'toilet_image_name'=> 'frog.jpeg',
            'latitude'=>'36',
            'longtitude' => '140',
            'station_id' => '51',
            ],

            ['toilet_name' => '東京駅',
            'closet_bowl_number' => '4',
            'toilet_image_name'=> 'moresou.jpeg',
            'latitude'=>'36',
            'longtitude' => '140',
            'station_id' => '41',
            ],

        ]);
    }
}
