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
                'right_id' => 9,
                'recomendation_id' => 1,
            ),
            1 => 
            array (
                'right_id' => 9,
                'recomendation_id' => 2,
            ),
            2 => 
            array (
                'right_id' => 8,
                'recomendation_id' => 2,
            ),
            3 => 
            array (
                'right_id' => 12,
                'recomendation_id' => 8,
            ),
            4 => 
            array (
                'right_id' => 19,
                'recomendation_id' => 9,
            ),
            5 => 
            array (
                'right_id' => 8,
                'recomendation_id' => 10,
            ),
            6 => 
            array (
                'right_id' => 12,
                'recomendation_id' => 10,
            ),
            7 => 
            array (
                'right_id' => 3,
                'recomendation_id' => 11,
            ),
            8 => 
            array (
                'right_id' => 8,
                'recomendation_id' => 12,
            ),
            9 => 
            array (
                'right_id' => 19,
                'recomendation_id' => 13,
            ),
            10 => 
            array (
                'right_id' => 7,
                'recomendation_id' => 14,
            ),
            11 => 
            array (
                'right_id' => 11,
                'recomendation_id' => 15,
            ),
            12 => 
            array (
                'right_id' => 5,
                'recomendation_id' => 16,
            ),
            13 => 
            array (
                'right_id' => 11,
                'recomendation_id' => 17,
            ),
            14 => 
            array (
                'right_id' => 12,
                'recomendation_id' => 17,
            ),
            15 => 
            array (
                'right_id' => 9,
                'recomendation_id' => 18,
            ),
            16 => 
            array (
                'right_id' => 7,
                'recomendation_id' => 19,
            ),
            17 => 
            array (
                'right_id' => 12,
                'recomendation_id' => 20,
            ),
            18 => 
            array (
                'right_id' => 5,
                'recomendation_id' => 21,
            ),
            19 => 
            array (
                'right_id' => 12,
                'recomendation_id' => 21,
            ),
            20 => 
            array (
                'right_id' => 13,
                'recomendation_id' => 22,
            ),
            21 => 
            array (
                'right_id' => 7,
                'recomendation_id' => 23,
            ),
            22 => 
            array (
                'right_id' => 11,
                'recomendation_id' => 24,
            ),
        ));
        
        
    }
}
