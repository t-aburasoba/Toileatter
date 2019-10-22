<?php

use Illuminate\Database\Seeder;

class RoutesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('routes')->insert([
            [
                'name' => '山手線',
            ],
            [
                'name' => '丸の内線',
            ]

        ]);
    }
}
