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
        DB::table('users')->insert([
            'name' => 'test',
            'email'=> 'test@test.com',
            'password'=>bcrypt('testtest'),
            'sex' => 'men',
            'often_station' => '田町',
            'often_route' => '山手線',
        ]);
    }
}
