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
            'icao' => 'EKYT',
            'name' => 'Aalborg',
        ]);

        DB::table('airports')->insert([
            'icao' => 'EKAH',
            'name' => 'Aarhus',
        ]);

        DB::table('airports')->insert([
            'icao' => 'EKVH',
            'name' => 'Aars',
        ]);

        DB::table('airports')->insert([
            'icao' => 'EKBI',
            'name' => 'Billund',
        ]);

        DB::table('airports')->insert([
            'icao' => 'EKRN',
            'name' => 'Bornholm (Rønne)',
        ]);

        DB::table('airports')->insert([
            'icao' => 'EKCH',
            'name' => 'Copenhagen',
        ]);

        DB::table('airports')->insert([
            'icao' => 'EKRK',
            'name' => 'Roskilde',
        ]);

        DB::table('airports')->insert([
            'icao' => 'EKEB',
            'name' => 'Esbjerg',
        ]);

        DB::table('airports')->insert([
            'icao' => 'EKHS',
            'name' => 'Hadsund',
        ]);

        DB::table('airports')->insert([
            'icao' => 'EKHG',
            'name' => 'Herning',
        ]);        

        DB::table('airports')->insert([
            'icao' => 'EKKL',
            'name' => 'Kalundborg',
        ]);        

        DB::table('airports')->insert([
            'icao' => 'EKKA',
            'name' => 'Karup',
        ]);        

        DB::table('airports')->insert([
            'icao' => 'EKVD',
            'name' => 'Vamdrup',
        ]);        

        DB::table('airports')->insert([
            'icao' => 'EKPB',
            'name' => 'Kruså-Padborg',
        ]);        

        DB::table('airports')->insert([
            'icao' => 'EKLS',
            'name' => 'Læsø',
        ]);        

        DB::table('airports')->insert([
            'icao' => 'EKLV',
            'name' => 'Lemvig',
        ]);        

        DB::table('airports')->insert([
            'icao' => 'EKMB',
            'name' => 'Lolland Falster (Maribo)',
        ]);

        DB::table('airports')->insert([
            'icao' => 'EKNM',
            'name' => 'Morsø',
        ]);    

        DB::table('airports')->insert([
            'icao' => 'EKOD',
            'name' => 'Odense',
        ]);    

        DB::table('airports')->insert([
            'icao' => 'EKRD',
            'name' => 'Randers',
        ]);    

         DB::table('airports')->insert([
            'icao' => 'EKRS',
            'name' => 'Ringsted',
        ]);    


        DB::table('airports')->insert([
            'icao' => 'EKSS',
            'name' => 'Samsø',
        ]);    

        DB::table('airports')->insert([
            'icao' => 'EKSN',
            'name' => 'Sindal',
        ]);    

        DB::table('airports')->insert([
            'icao' => 'EKVJ',
            'name' => 'Stauning',
        ]);    

        DB::table('airports')->insert([
            'icao' => 'EKSV',
            'name' => 'Skive',
        ]);

        DB::table('airports')->insert([
            'icao' => 'EKSB',
            'name' => 'Sønderborg',
        ]);        

        DB::table('airports')->insert([
            'icao' => 'EKSD',
            'name' => 'Spjald',
        ]);        

        DB::table('airports')->insert([
            'icao' => 'EKST',
            'name' => 'Sydfyn (Tåsinge)',
        ]);        

        DB::table('airports')->insert([
            'icao' => 'EKTS',
            'name' => 'Thisted',
        ]);        

        DB::table('airports')->insert([
            'icao' => 'EKTD',
            'name' => 'Tønder',
        ]);        

        DB::table('airports')->insert([
            'icao' => 'EKVB',
            'name' => 'Viborg',
        ]);

        DB::table('airports')->insert([
            'icao' => 'EKSP',
            'name' => 'Vojens (Fighter Wing Skrydstrup)',
        ]);                                                               
    }
}
