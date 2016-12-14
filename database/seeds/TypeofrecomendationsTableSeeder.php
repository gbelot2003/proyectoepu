<?php

use Illuminate\Database\Seeder;

class TypeofrecomendationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('typeofrecomendations')->delete();
        
        \DB::table('typeofrecomendations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'EPU',
                'created_at' => '2016-12-14 13:37:57',
                'updated_at' => '2016-12-14 13:38:04',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'RESC',
                'created_at' => '2016-12-14 13:38:06',
                'updated_at' => '2016-12-14 13:38:08',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'DESC',
                'created_at' => '2016-12-14 13:41:44',
                'updated_at' => '2016-12-14 13:41:46',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'CIDH-HN',
                'created_at' => '2016-12-14 13:42:29',
                'updated_at' => '2016-12-14 13:42:30',
            ),
        ));
        
        
    }
}
