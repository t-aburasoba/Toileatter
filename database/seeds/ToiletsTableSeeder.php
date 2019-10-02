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

            ['closet_bowl_number' => '5',
            'toilet_image_name'=> 'toilet1',
            'latitude'=>'135',
            'longtitude' => '45',
            ],

            ['closet_bowl_number' => '6',
            'toilet_image_name'=> 'toilet2',
            'latitude'=>'135',
            'longtitude' => '45',
            ],

            ['closet_bowl_number' => '2',
            'toilet_image_name'=> 'toilet3',
            'latitude'=>'135',
            'longtitude' => '45',
            ],

            ['closet_bowl_number' => '4',
            'toilet_image_name'=> 'toilet4',
            'latitude'=>'135',
            'longtitude' => '45',
            ],

        ]);
    }
}
