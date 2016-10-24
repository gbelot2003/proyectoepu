<?php

use Illuminate\Database\Seeder;

class InstitutionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('institutions')->delete();
        
        \DB::table('institutions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Institucion1',
                'url' => 'http://local1.com',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Institucion2',
                'url' => 'http://local2.com',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Institucion3',
                'url' => 'http://local3.com',
            ),
        ));
        
        
    }
}
