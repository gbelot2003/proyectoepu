<?php

use Illuminate\Database\Seeder;

class TypeofrightsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('typeofrights')->delete();
        
        \DB::table('typeofrights')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Aplicación de Instrumentos Estrategicos y Juridicos',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Grupos Vulnerabilizados',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Instituciones Gubernamentales y de Sociedad Civil',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Violaciones Sistemáticas a Derechos Humanos',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Desc',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Libertad de Expresión',
            ),
        ));
        
        
    }
}
