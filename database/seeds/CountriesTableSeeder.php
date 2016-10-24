<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('countries')->delete();
        
        \DB::table('countries')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Alemania',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Angola',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Argelia',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Argentina',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Australia',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Austria',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Belgica',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Brasil',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Canada',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Chile',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'China',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Colombia',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Costa Rica',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Cuba',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Dinamarka',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Ecuador',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Eslovenia',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'España',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Estonia',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'EUA',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Filipinas',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Francia',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Guatemala',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Guinea Ecuatorial',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Indonesia	
',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Irlanda',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Italia',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Libano',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Madagascar',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Mexico',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Montenegro',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Namibia',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Nicaragua',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Nigeria',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Noruega',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Paises Bajos',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Panamá',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Paraguay',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Peru',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Polonia',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'Portugal',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Qatar',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'Reino Unido',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'Republica Checa',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'Rumania',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'Rusia',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'Rwanda',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Santa Sede',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'Sierra Leona',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'Singapur',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'Suecia',
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'Suiza',
            ),
        ));
        
        
    }
}
