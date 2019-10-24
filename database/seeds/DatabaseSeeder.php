<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoutesTableSeeder::class);
        $this->call(StationsTableSeeder::class);
        // $this->call(UsersTableSeeder::class);
        $this->call(ToiletsTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(TotalizationsTableSeeder::class);
    }
}
