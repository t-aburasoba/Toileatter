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

            ['toilet_name' => '有楽町駅中央西口',
            'toilet_image_name'=> 'mirror.jpeg',
            'latitude'=>'35.6749998',
            'longtitude' => '139.7630718',
            'station_id' => '101',
            ],

            ['toilet_name' => '有楽町駅国際フォーラム口',
            'toilet_image_name'=> 'mirror.jpeg',
            'latitude'=>'35.6752980',
            'longtitude' => '139.7635201',
            'station_id' => '101',
            ],

            ['toilet_name' => '新橋駅銀座改札',
            'toilet_image_name'=> 'mirror.jpeg',
            'latitude'=>'35.6667826',
            'longtitude' => '139.7583856',
            'station_id' => '121',
            ],

            ['toilet_name' => '新橋駅日比谷改札',
            'toilet_image_name'=> 'mirror.jpeg',
            'latitude'=>'35.6667066',
            'longtitude' => '139.7580926',
            'station_id' => '121',
            ],

            ['toilet_name' => '浜松町駅北口',
            'toilet_image_name'=> 'mirror.jpeg',
            'latitude'=>'35.6561750',
            'longtitude' => '139.7574851',
            'station_id' => '131',
            ],

            ['toilet_name' => '浜松町駅南口',
            'toilet_image_name'=> 'mirror.jpeg',
            'latitude'=>'35.6551640',
            'longtitude' => '139.7566372',
            'station_id' => '131',
            ],

            ['toilet_name' => '田町駅北改札',
            'toilet_image_name'=> 'mirror.jpeg',
            'latitude'=>'35.6459274',
            'longtitude' => '139.7478580',
            'station_id' => '1',
            ],

            ['toilet_name' => '田町駅南改札',
            'toilet_image_name'=> 'mirror.jpeg',
            'latitude'=>'35.6456525',
            'longtitude' => '139.7472213',
            'station_id' => '1',
            ],

            ['toilet_name' => '品川駅エキュート付近',
            'toilet_image_name'=> 'mirror.jpeg',
            'latitude'=>'35.6280466',
            'longtitude' => '139.7391794',
            'station_id' => '141',
            ],

            ['toilet_name' => '品川駅北改札',
            'toilet_image_name'=> 'mirror.jpeg',
            'latitude'=>'35.6291028',
            'longtitude' => '139.7387616',
            'station_id' => '141',
            ],

            ['toilet_name' => '新宿駅西口',
            'toilet_image_name'=> 'restroom.jpeg',
            'latitude'=>'36',
            'longtitude' => '140',
            'station_id' => '21',
            ],

            ['toilet_name' => '田町駅',
            'toilet_image_name'=> 'bg.jpeg',
            'latitude'=>'36',
            'longtitude' => '140',
            'station_id' => '1',
            ],

            ['toilet_name' => '上野駅東口',
            'toilet_image_name'=> 'default.jpeg',
            'latitude'=>'36',
            'longtitude' => '140',
            'station_id' => '31',
            ],

            ['toilet_name' => '神田駅',
            'toilet_image_name'=> 'frog.jpeg',
            'latitude'=>'36',
            'longtitude' => '140',
            'station_id' => '51',
            ],

            ['toilet_name' => '東京駅',
            'toilet_image_name'=> 'moresou.jpeg',
            'latitude'=>'36',
            'longtitude' => '140',
            'station_id' => '41',
            ],

        ]);
    }
}
