<?php

use Illuminate\Database\Seeder;

class RecomendationRightTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('recomendation_right')->delete();
        
        \DB::table('recomendation_right')->insert(array (
            0 => 
            array (
                'recomendation_id' => 1,
                'right_id' => 3,
            ),
            1 => 
            array (
                'recomendation_id' => 1,
                'right_id' => 5,
            ),
            2 => 
            array (
                'recomendation_id' => 1,
                'right_id' => 6,
            ),
        ));
        
        
    }
}
