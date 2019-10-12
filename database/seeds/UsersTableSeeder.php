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
            'often_station' => '秋葉原',
            'often_route' => '山手線',
        ]
    );
    }
}
