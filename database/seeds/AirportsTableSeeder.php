<?php

use Illuminate\Database\Seeder;

class AirportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('airports')->insert([
            'icao' => 'EKCH',
            'name' => 'Copenhagen, Kastrup',
        ]);      
    }
}
