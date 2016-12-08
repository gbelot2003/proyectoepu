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
                'right_id' => 3,
                'recomendation_id' => 1,
            ),
            1 => 
            array (
                'right_id' => 5,
                'recomendation_id' => 1,
            ),
            2 => 
            array (
                'right_id' => 6,
                'recomendation_id' => 1,
            ),
            3 => 
            array (
                'right_id' => 4,
                'recomendation_id' => 4,
            ),
            4 => 
            array (
                'right_id' => 5,
                'recomendation_id' => 3,
            ),
            5 => 
            array (
                'right_id' => 18,
                'recomendation_id' => 2,
            ),
            6 => 
            array (
                'right_id' => 2,
                'recomendation_id' => 3,
            ),
            7 => 
            array (
                'right_id' => 3,
                'recomendation_id' => 5,
            ),
            8 => 
            array (
                'right_id' => 14,
                'recomendation_id' => 5,
            ),
            9 => 
            array (
                'right_id' => 10,
                'recomendation_id' => 6,
            ),
            10 => 
            array (
                'right_id' => 5,
                'recomendation_id' => 7,
            ),
            11 => 
            array (
                'right_id' => 21,
                'recomendation_id' => 8,
            ),
            12 => 
            array (
                'right_id' => 4,
                'recomendation_id' => 9,
            ),
            13 => 
            array (
                'right_id' => 22,
                'recomendation_id' => 10,
            ),
        ));
        
        
    }
}
