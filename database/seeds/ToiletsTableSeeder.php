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

            ['toilet_name' => '大崎駅北改札口',
            'toilet_image_name'=> 'mirror.jpeg',
            'latitude'=>'35.6198409',
            'longtitude' => '139.7279194',
            'station_id' => '151',
            ],

            ['toilet_name' => '五反田駅',
            'toilet_image_name'=> 'mirror.jpeg',
            'latitude'=>'35.6263351',
            'longtitude' => '139.7234717',
            'station_id' => '161',
            ],

            ['toilet_name' => '目黒駅',
            'toilet_image_name'=> 'mirror.jpeg',
            'latitude'=>'35.6338888',
            'longtitude' => '139.7158525',
            'station_id' => '171',
            ],

            ['toilet_name' => '恵比寿駅東口',
            'toilet_image_name'=> 'mirror.jpeg',
            'latitude'=>'35.6463950',
            'longtitude' => '139.7106678',
            'station_id' => '181',
            ],

            ['toilet_name' => '恵比寿駅西口',
            'toilet_image_name'=> 'mirror.jpeg',
            'latitude'=>'35.6468756',
            'longtitude' => '139.7098373',
            'station_id' => '181',
            ],

            ['toilet_name' => '渋谷駅南改札',
            'toilet_image_name'=> 'mirror.jpeg',
            'latitude'=>'35.6578536',
            'longtitude' => '139.7016801',
            'station_id' => '191',
            ],

            ['toilet_name' => '渋谷駅ハチ公改札',
            'toilet_image_name'=> 'mirror.jpeg',
            'latitude'=>'35.6593059',
            'longtitude' => '139.7011624',
            'station_id' => '191',
            ],

            ['toilet_name' => '原宿駅表参道口',
            'toilet_image_name'=> 'mirror.jpeg',
            'latitude'=>'35.6705249',
            'longtitude' => '139.7026896',
            'station_id' => '201',
            ],

            ['toilet_name' => '代々木駅',
            'toilet_image_name'=> 'mirror.jpeg',
            'latitude'=>'35.6831097',
            'longtitude' => '139.7023127',
            'station_id' => '211',
            ],

        ]);
    }
}
