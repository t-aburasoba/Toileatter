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
            'toilet_image_name'=> 'toilet1',
            'latitude'=>'135',
            'longtitude' => '45',
            'station_id' => '2',
            ],

            ['toilet_name' => '新宿駅西口',
            'closet_bowl_number' => '6',
            'toilet_image_name'=> 'toilet2',
            'latitude'=>'135',
            'longtitude' => '45',
            'station_id' => '3',
            ],

            ['toilet_name' => '田町駅',
            'closet_bowl_number' => '2',
            'toilet_image_name'=> 'toilet3',
            'latitude'=>'135',
            'longtitude' => '45',
            'station_id' => '1',
            ],

            ['toilet_name' => '上野駅東口',
            'closet_bowl_number' => '4',
            'toilet_image_name'=> 'toilet4',
            'latitude'=>'135',
            'longtitude' => '45',
            'station_id' => '4',
            ],

        ]);
    }
}
