<?php

use Illuminate\Database\Seeder;

class InstitutionRecomendationTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('institution_recomendation')->delete();
        
        \DB::table('institution_recomendation')->insert(array (
            0 => 
            array (
                'institution_id' => 2,
                'recomendation_id' => 1,
            ),
            1 => 
            array (
                'institution_id' => 1,
                'recomendation_id' => 1,
            ),
            2 => 
            array (
                'institution_id' => 1,
                'recomendation_id' => 4,
            ),
            3 => 
            array (
                'institution_id' => 1,
                'recomendation_id' => 3,
            ),
            4 => 
            array (
                'institution_id' => 3,
                'recomendation_id' => 2,
            ),
            5 => 
            array (
                'institution_id' => 3,
                'recomendation_id' => 3,
            ),
            6 => 
            array (
                'institution_id' => 3,
                'recomendation_id' => 4,
            ),
            7 => 
            array (
                'institution_id' => 2,
                'recomendation_id' => 3,
            ),
            8 => 
            array (
                'institution_id' => 1,
                'recomendation_id' => 5,
            ),
            9 => 
            array (
                'institution_id' => 3,
                'recomendation_id' => 6,
            ),
            10 => 
            array (
                'institution_id' => 2,
                'recomendation_id' => 7,
            ),
            11 => 
            array (
                'institution_id' => 3,
                'recomendation_id' => 8,
            ),
            12 => 
            array (
                'institution_id' => 2,
                'recomendation_id' => 9,
            ),
            13 => 
            array (
                'institution_id' => 2,
                'recomendation_id' => 10,
            ),
        ));
        
        
    }
}
