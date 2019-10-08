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

            ['name' => '神田',
            'route_id'=> '1',
            ],

            ['name' => '渋谷',
            'route_id'=> '1',
            ],

        ]);
    }
}
