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
        if ($this->app->environment() === 'production') {
            DB::table('toilets')->insert([
                ['toilet_name' => '有楽町駅中央西口',
                'latitude'=>'35.6749998',
                'longtitude' => '139.7630718',
                'station_id' => '101',
                ],
    
                ['toilet_name' => '有楽町駅国際フォーラム口',
                'latitude'=>'35.6752980',
                'longtitude' => '139.7635201',
                'station_id' => '101',
                ],
    
                ['toilet_name' => '新橋駅銀座改札',
                'latitude'=>'35.6667826',
                'longtitude' => '139.7583856',
                'station_id' => '121',
                ],
    
                ['toilet_name' => '新橋駅日比谷改札',
                'latitude'=>'35.6667066',
                'longtitude' => '139.7580926',
                'station_id' => '121',
                ],
    
                ['toilet_name' => '浜松町駅北口',
                'latitude'=>'35.6561750',
                'longtitude' => '139.7574851',
                'station_id' => '131',
                ],
    
                ['toilet_name' => '浜松町駅南口',
                'latitude'=>'35.6551640',
                'longtitude' => '139.7566372',
                'station_id' => '131',
                ],
    
                ['toilet_name' => '田町駅北改札',
                'latitude'=>'35.6459274',
                'longtitude' => '139.7478580',
                'station_id' => '1',
                ],
    
                ['toilet_name' => '田町駅南改札',
                'latitude'=>'35.6456525',
                'longtitude' => '139.7472213',
                'station_id' => '1',
                ],
    
                ['toilet_name' => '品川駅エキュート付近',
                'latitude'=>'35.6280466',
                'longtitude' => '139.7391794',
                'station_id' => '141',
                ],
    
                ['toilet_name' => '品川駅北改札',
                'latitude'=>'35.6291028',
                'longtitude' => '139.7387616',
                'station_id' => '141',
                ],
    
                ['toilet_name' => '大崎駅北改札口',
                'latitude'=>'35.6198409',
                'longtitude' => '139.7279194',
                'station_id' => '151',
                ],
    
                ['toilet_name' => '五反田駅',
                'latitude'=>'35.6263351',
                'longtitude' => '139.7234717',
                'station_id' => '161',
                ],
    
                ['toilet_name' => '目黒駅',
                'latitude'=>'35.6338888',
                'longtitude' => '139.7158525',
                'station_id' => '171',
                ],
    
                ['toilet_name' => '恵比寿駅東口',
                'latitude'=>'35.6463950',
                'longtitude' => '139.7106678',
                'station_id' => '181',
                ],
    
                ['toilet_name' => '恵比寿駅西口',
                'latitude'=>'35.6468756',
                'longtitude' => '139.7098373',
                'station_id' => '181',
                ],
    
                ['toilet_name' => '渋谷駅南改札',
                'latitude'=>'35.6578536',
                'longtitude' => '139.7016801',
                'station_id' => '191',
                ],
    
                ['toilet_name' => '渋谷駅ハチ公改札',
                'latitude'=>'35.6593059',
                'longtitude' => '139.7011624',
                'station_id' => '191',
                ],
    
                ['toilet_name' => '原宿駅表参道口',
                'latitude'=>'35.6705249',
                'longtitude' => '139.7026896',
                'station_id' => '201',
                ],
    
                ['toilet_name' => '代々木駅',
                'latitude'=>'35.6831097',
                'longtitude' => '139.7023127',
                'station_id' => '211',
                ],
    
                ['toilet_name' => '新宿駅東南改札',
                'latitude'=>'35.6898972',
                'longtitude' => '139.7008901',
                'station_id' => '21',
                ],
    
                ['toilet_name' => '新宿駅中央東口',
                'latitude'=>'35.6909257',
                'longtitude' => '139.7007876',
                'station_id' => '21',
                ],
    
                ['toilet_name' => '新大久保駅',
                'latitude'=>'35.7012028',
                'longtitude' => '139.7000536',
                'station_id' => '221',
                ],
    
                ['toilet_name' => '高田馬場駅早稲田口',
                'latitude'=>'35.7134058',
                'longtitude' => '139.7037775',
                'station_id' => '231',
                ],
    
                ['toilet_name' => '目白駅',
                'latitude'=>'35.7211268',
                'longtitude' => '139.7066314',
                'station_id' => '241',
                ],
    
                ['toilet_name' => '大塚駅',
                'latitude'=>'35.7317931',
                'longtitude' => '139.7284700',
                'station_id' => '261',
                ],
    
                ['toilet_name' => '巣鴨駅',
                'latitude'=>'35.7335978',
                'longtitude' => '139.7396005',
                'station_id' => '271',
                ],
    
                ['toilet_name' => '駒込駅東口',
                'latitude'=>'35.7372830',
                'longtitude' => '139.7487334',
                'station_id' => '281',
                ],
    
                ['toilet_name' => '駒込駅北口',
                'latitude'=>'35.7366380',
                'longtitude' => '139.7472062',
                'station_id' => '281',
                ],
    
                ['toilet_name' => '田端駅',
                'latitude'=>'35.7381095',
                'longtitude' => '139.7610625',
                'station_id' => '61',
                ],
    
                ['toilet_name' => '西日暮里駅',
                'latitude'=>'35.731898',
                'longtitude' => '139.7669563',
                'station_id' => '71',
                ],
    
                ['toilet_name' => '日暮里駅',
                'latitude'=>'35.7281264',
                'longtitude' => '139.7703030',
                'station_id' => '81',
                ],
    
                ['toilet_name' => '鶯谷駅南口改札',
                'latitude'=>'35.7205348',
                'longtitude' => '139.7787610',
                'station_id' => '91',
                ],
    
                ['toilet_name' => '鶯谷駅北口改札',
                'latitude'=>'35.7223871',
                'longtitude' => '139.7778115',
                'station_id' => '91',
                ],
    
                ['toilet_name' => '御徒町駅北口改札',
                'latitude'=>'35.7074144',
                'longtitude' => '139.7749634',
                'station_id' => '111',
                ],
    
                ['toilet_name' => '御徒町駅南口改札',
                'latitude'=>'35.7064637',
                'longtitude' => '139.7745815',
                'station_id' => '111',
                ],
    
                ['toilet_name' => '秋葉原駅電気街口',
                'latitude'=>'35.6986304',
                'longtitude' => '139.7732887',
                'station_id' => '11',
                ],
    
                ['toilet_name' => '神田駅北口',
                'latitude'=>'35.6921644',
                'longtitude' => '139.7708593',
                'station_id' => '51',
                ],
    
                ['toilet_name' => '神田駅南口',
                'latitude'=>'35.6913731',
                'longtitude' => '139.7708039',
                'station_id' => '51',
                ],
                ['toilet_name' => '東京駅八重洲北口',
                'latitude'=>'35.6817981',
                'longtitude' => '139.7679139',
                'station_id' => '41',
                ],
    
                ['toilet_name' => '池袋駅中央口',
                'latitude'=>'35.7299277',
                'longtitude' => '139.7111305',
                'station_id' => '251',
                ],
                
                ['toilet_name' => '上野駅中央改札前',
                'latitude'=>'35.7127938',
                'longtitude' => '139.7766270',
                'station_id' => '31',
                ],
    
                ['toilet_name' => '新宿駅南口',
                'latitude'=>'35.6898800',
                'longtitude' => '139.7008928',
                'station_id' => '21',
                ],
            ]);
        } else {
            DB::table('toilets')->insert([
                ['toilet_name' => '有楽町駅中央西口',
                'latitude'=>'35.6749998',
                'longtitude' => '139.7630718',
                'station_id' => '11',
                ],
    
                ['toilet_name' => '有楽町駅国際フォーラム口',
                'latitude'=>'35.6752980',
                'longtitude' => '139.7635201',
                'station_id' => '11',
                ],
    
                ['toilet_name' => '新橋駅銀座改札',
                'latitude'=>'35.6667826',
                'longtitude' => '139.7583856',
                'station_id' => '13',
                ],
    
                ['toilet_name' => '新橋駅日比谷改札',
                'latitude'=>'35.6667066',
                'longtitude' => '139.7580926',
                'station_id' => '13',
                ],
    
                ['toilet_name' => '浜松町駅北口',
                'latitude'=>'35.6561750',
                'longtitude' => '139.7574851',
                'station_id' => '14',
                ],
    
                ['toilet_name' => '浜松町駅南口',
                'latitude'=>'35.6551640',
                'longtitude' => '139.7566372',
                'station_id' => '14',
                ],
    
                ['toilet_name' => '田町駅北改札',
                'latitude'=>'35.6459274',
                'longtitude' => '139.7478580',
                'station_id' => '1',
                ],
    
                ['toilet_name' => '田町駅南改札',
                'latitude'=>'35.6456525',
                'longtitude' => '139.7472213',
                'station_id' => '1',
                ],
    
                ['toilet_name' => '品川駅エキュート付近',
                'latitude'=>'35.6280466',
                'longtitude' => '139.7391794',
                'station_id' => '15',
                ],
    
                ['toilet_name' => '品川駅北改札',
                'latitude'=>'35.6291028',
                'longtitude' => '139.7387616',
                'station_id' => '15',
                ],
    
                ['toilet_name' => '大崎駅北改札口',
                'latitude'=>'35.6198409',
                'longtitude' => '139.7279194',
                'station_id' => '16',
                ],
    
                ['toilet_name' => '五反田駅',
                'latitude'=>'35.6263351',
                'longtitude' => '139.7234717',
                'station_id' => '17',
                ],
    
                ['toilet_name' => '目黒駅',
                'latitude'=>'35.6338888',
                'longtitude' => '139.7158525',
                'station_id' => '18',
                ],
    
                ['toilet_name' => '恵比寿駅東口',
                'latitude'=>'35.6463950',
                'longtitude' => '139.7106678',
                'station_id' => '19',
                ],
    
                ['toilet_name' => '恵比寿駅西口',
                'latitude'=>'35.6468756',
                'longtitude' => '139.7098373',
                'station_id' => '19',
                ],
    
                ['toilet_name' => '渋谷駅南改札',
                'latitude'=>'35.6578536',
                'longtitude' => '139.7016801',
                'station_id' => '20',
                ],
    
                ['toilet_name' => '渋谷駅ハチ公改札',
                'latitude'=>'35.6593059',
                'longtitude' => '139.7011624',
                'station_id' => '20',
                ],
    
                ['toilet_name' => '原宿駅表参道口',
                'latitude'=>'35.6705249',
                'longtitude' => '139.7026896',
                'station_id' => '21',
                ],
    
                ['toilet_name' => '代々木駅',
                'latitude'=>'35.6831097',
                'longtitude' => '139.7023127',
                'station_id' => '22',
                ],
    
                ['toilet_name' => '新宿駅東南改札',
                'latitude'=>'35.6898972',
                'longtitude' => '139.7008901',
                'station_id' => '21',
                ],
    
                ['toilet_name' => '新宿駅中央東口',
                'latitude'=>'35.6909257',
                'longtitude' => '139.7007876',
                'station_id' => '21',
                ],
    
                ['toilet_name' => '新大久保駅',
                'latitude'=>'35.7012028',
                'longtitude' => '139.7000536',
                'station_id' => '23',
                ],
    
                ['toilet_name' => '高田馬場駅早稲田口',
                'latitude'=>'35.7134058',
                'longtitude' => '139.7037775',
                'station_id' => '24',
                ],
    
                ['toilet_name' => '目白駅',
                'latitude'=>'35.7211268',
                'longtitude' => '139.7066314',
                'station_id' => '25',
                ],
    
                ['toilet_name' => '大塚駅',
                'latitude'=>'35.7317931',
                'longtitude' => '139.7284700',
                'station_id' => '27',
                ],
    
                ['toilet_name' => '巣鴨駅',
                'latitude'=>'35.7335978',
                'longtitude' => '139.7396005',
                'station_id' => '28',
                ],
    
                ['toilet_name' => '駒込駅東口',
                'latitude'=>'35.7372830',
                'longtitude' => '139.7487334',
                'station_id' => '29',
                ],
    
                ['toilet_name' => '駒込駅北口',
                'latitude'=>'35.7366380',
                'longtitude' => '139.7472062',
                'station_id' => '29',
                ],
    
                ['toilet_name' => '田端駅',
                'latitude'=>'35.7381095',
                'longtitude' => '139.7610625',
                'station_id' => '7',
                ],
    
                ['toilet_name' => '西日暮里駅',
                'latitude'=>'35.731898',
                'longtitude' => '139.7669563',
                'station_id' => '8',
                ],
    
                ['toilet_name' => '日暮里駅',
                'latitude'=>'35.7281264',
                'longtitude' => '139.7703030',
                'station_id' => '9',
                ],
    
                ['toilet_name' => '鶯谷駅南口改札',
                'latitude'=>'35.7205348',
                'longtitude' => '139.7787610',
                'station_id' => '10',
                ],
    
                ['toilet_name' => '鶯谷駅北口改札',
                'latitude'=>'35.7223871',
                'longtitude' => '139.7778115',
                'station_id' => '10',
                ],
    
                ['toilet_name' => '御徒町駅北口改札',
                'latitude'=>'35.7074144',
                'longtitude' => '139.7749634',
                'station_id' => '12',
                ],
    
                ['toilet_name' => '御徒町駅南口改札',
                'latitude'=>'35.7064637',
                'longtitude' => '139.7745815',
                'station_id' => '12',
                ],
    
                ['toilet_name' => '秋葉原駅電気街口',
                'latitude'=>'35.6986304',
                'longtitude' => '139.7732887',
                'station_id' => '2',
                ],
    
                ['toilet_name' => '神田駅北口',
                'latitude'=>'35.6921644',
                'longtitude' => '139.7708593',
                'station_id' => '6',
                ],
    
                ['toilet_name' => '神田駅南口',
                'latitude'=>'35.6913731',
                'longtitude' => '139.7708039',
                'station_id' => '6',
                ],
                ['toilet_name' => '東京駅八重洲北口',
                'latitude'=>'35.6817981',
                'longtitude' => '139.7679139',
                'station_id' => '5',
                ],
    
                ['toilet_name' => '池袋駅中央口',
                'latitude'=>'35.7299277',
                'longtitude' => '139.7111305',
                'station_id' => '26',
                ],
                
                ['toilet_name' => '上野駅中央改札前',
                'latitude'=>'35.7127938',
                'longtitude' => '139.7766270',
                'station_id' => '4',
                ],
    
                ['toilet_name' => '新宿駅南口',
                'latitude'=>'35.6898800',
                'longtitude' => '139.7008928',
                'station_id' => '3',
                ],
    
            ]);
        }
    }
}
