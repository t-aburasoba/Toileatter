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
            ['evaluation' => '0',
            'total_users' => '0',
            'beautifulness_male' => '綺麗',
            'beautifulness_female' => '綺麗',
            'number_male' => '0',
            'number_female' => '0',
            'distance' => '近い',
            'toilet_id' => '1',
            'probability_enter_male' => '0',
            'probability_enter_female' => '0',],
            ['evaluation' => '5',
            'total_users' => '4',
            'beautifulness_male' => '綺麗',
            'beautifulness_female' => '綺麗',
            'number_male' => '0',
            'number_female' => '0',
            'distance' => '近い',
            'toilet_id' => '2',
            'probability_enter_male' => '0',
            'probability_enter_female' => '0',],
            ['evaluation' => '0',
            'total_users' => '0',
            'beautifulness_male' => '綺麗',
            'beautifulness_female' => '綺麗',
            'number_male' => '0',
            'number_female' => '0',
            'distance' => '近い',
            'toilet_id' => '3',
            'probability_enter_male' => '0',
            'probability_enter_female' => '0',],
            ['evaluation' => '0',
            'total_users' => '0',
            'beautifulness_male' => '綺麗',
            'beautifulness_female' => '綺麗',
            'number_male' => '0',
            'number_female' => '0',
            'distance' => '近い',
            'toilet_id' => '4',
            'probability_enter_male' => '0',
            'probability_enter_female' => '0',],
            ['evaluation' => '0',
            'total_users' => '0',
            'beautifulness_male' => '綺麗',
            'beautifulness_female' => '綺麗',
            'number_male' => '0',
            'number_female' => '0',
            'distance' => '近い',
            'toilet_id' => '5',
            'probability_enter_male' => '0',
            'probability_enter_female' => '0',],
            ['evaluation' => '6',
            'total_users' => '0',
            'beautifulness_male' => '綺麗',
            'beautifulness_female' => '綺麗',
            'number_male' => '0',
            'number_female' => '0',
            'distance' => '近い',
            'toilet_id' => '6',
            'probability_enter_male' => '0',
            'probability_enter_female' => '0',],
        ]);
    }
}