<?php

use Illuminate\Database\Seeder;

class RightsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('rights')->delete();
        
        \DB::table('rights')->insert(array (
            0 => 
            array (
                'id' => 1,
                'typeofright' => 1,
                'name' => 'Seguimiento de recomendaciones del EPU',
            ),
            1 => 
            array (
                'id' => 2,
                'typeofright' => 1,
                'name' => 'Armonización interna con convenios internacionales',
            ),
            2 => 
            array (
                'id' => 3,
                'typeofright' => 1,
                'name' => 'Aplicación del plan nacional de derechos humanos  ',
            ),
            3 => 
            array (
                'id' => 4,
                'typeofright' => 1,
                'name' => 'Aplicación de convenios',
            ),
            4 => 
            array (
                'id' => 5,
                'typeofright' => 1,
                'name' => 'Acceso a la justicia',
            ),
            5 => 
            array (
                'id' => 6,
                'typeofright' => 1,
                'name' => 'Seguridad ciudadana',
            ),
            6 => 
            array (
                'id' => 7,
                'typeofright' => 2,
                'name' => 'Protección a defensores de derechos humanos',
            ),
            7 => 
            array (
                'id' => 8,
                'typeofright' => 2,
                'name' => 'Derechos de la niñez',
            ),
            8 => 
            array (
                'id' => 9,
                'typeofright' => 2,
                'name' => 'Privados de libertad',
            ),
            9 => 
            array (
                'id' => 10,
                'typeofright' => 2,
                'name' => 'Pueblos indígenas y afrodesendientes',
            ),
            10 => 
            array (
                'id' => 11,
                'typeofright' => 2,
                'name' => 'Derechos de comunidades LGTBI',
            ),
            11 => 
            array (
                'id' => 12,
                'typeofright' => 2,
                'name' => 'Violencia contra las mujeres',
            ),
            12 => 
            array (
                'id' => 13,
                'typeofright' => 3,
                'name' => 'Respuesta ante órganos de derechos humanos',
            ),
            13 => 
            array (
                'id' => 14,
                'typeofright' => 3,
                'name' => 'Independencia juridica',
            ),
            14 => 
            array (
                'id' => 15,
                'typeofright' => 3,
                'name' => 'Fortalecimiento institucional CONADEH',
            ),
            15 => 
            array (
                'id' => 16,
                'typeofright' => 3,
                'name' => 'Comisión de la verdad y la reconciliación',
            ),
            16 => 
            array (
                'id' => 17,
                'typeofright' => 4,
                'name' => 'Crimenes de odio',
            ),
            17 => 
            array (
                'id' => 18,
                'typeofright' => 4,
                'name' => 'Trata de personas',
            ),
            18 => 
            array (
                'id' => 19,
                'typeofright' => 4,
                'name' => 'No discriminación racial',
            ),
            19 => 
            array (
                'id' => 20,
                'typeofright' => 4,
                'name' => 'Tortura',
            ),
            20 => 
            array (
                'id' => 21,
                'typeofright' => 4,
                'name' => 'Control de armas de fuego',
            ),
            21 => 
            array (
                'id' => 22,
                'typeofright' => 5,
                'name' => 'DESC',
            ),
        ));
        
        
    }
}
