<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
            'name' => 'test',
            'email'=> 'test@test.com',
            'password'=>bcrypt('testtest'),
            'gender' => 'Female',
            'station_id' => '3',
            'route_id' => '1',
            ]

            // [
            // 'name' => 't',
            // 'email'=> 't@t.com',
            // 'password'=>bcrypt('tttttttt'),
            // 'gender' => 'Male',
            // 'often_station' => '新宿',
            // 'often_route' => '山手線',
            // ]
            );
    }
}
