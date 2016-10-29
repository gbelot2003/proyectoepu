<?php

use Illuminate\Database\Seeder;

class RecomendationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('recomendations')->delete();
        
        \DB::table('recomendations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Blad asd ad a sda sda',
                'country_id' => 1,
                'created_at' => '2016-10-28 02:05:10',
                'updated_at' => '2016-10-29 05:09:16',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Procedimientos Especiales',
                'country_id' => 1,
                'created_at' => '2016-10-29 05:04:33',
                'updated_at' => '2016-10-29 05:04:33',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'dev_epu1',
                'country_id' => 1,
                'created_at' => '2016-10-29 05:05:36',
                'updated_at' => '2016-10-29 05:08:13',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'dev_epu3',
                'country_id' => 17,
                'created_at' => '2016-10-29 05:06:38',
                'updated_at' => '2016-10-29 05:08:28',
            ),
        ));
        
        
    }
}
