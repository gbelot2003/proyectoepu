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
                'name' => 'asdas asd asdasdasd',
                'country_id' => 1,
                'created_at' => '2016-10-28 02:05:10',
                'updated_at' => '2016-10-28 02:05:12',
            ),
        ));
        
        
    }
}
