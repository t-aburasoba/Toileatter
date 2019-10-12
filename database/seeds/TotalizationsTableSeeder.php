<?php

use Illuminate\Database\Seeder;

class TotalizationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('totalizations')->insert([
            ['evaluation' => '3',
            'total_users' => '3',
            'beautifulness' => '綺麗',
            'distance' => '遠い',
            'probability_enter' => '30',],
            ['evaluation' => '5',
            'total_users' => '4',
            'beautifulness' => '綺麗',
            'distance' => '遠い',
            'probability_enter' => '60',],
            ['evaluation' => '1',
            'total_users' => '1',
            'beautifulness' => '綺麗',
            'distance' => '遠い',
            'probability_enter' => '10',],
            ['evaluation' => '6',
            'total_users' => '9',
            'beautifulness' => '綺麗',
            'distance' => '遠い',
            'probability_enter' => '70',],
        ]);
    }
}