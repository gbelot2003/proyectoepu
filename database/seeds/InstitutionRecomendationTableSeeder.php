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
        ));
        
        
    }
}
