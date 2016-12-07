<?php

use Illuminate\Database\Seeder;

class OrganizacionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('organizacions')->delete();
        
        \DB::table('organizacions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'CLibre',
                'details' => 'Comité Para la Libertad de Expresión en Honduras',
                'created_at' => '2016-10-30 15:11:35',
                'updated_at' => '2016-12-07 20:27:23',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'ACI Participa',
                'details' => 'cualquier cosa necesaria en este campo',
                'created_at' => '2016-10-30 21:55:34',
                'updated_at' => '2016-12-07 20:27:38',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'CHJ',
                'details' => 'Augue cum adipiscing adipiscing eu, a! Magna non? Urna, et cum augue massa quis, scelerisque dictumst lundium nec mattis et etiam. Duis, ut integer porta! Augue porttitor, tristique habitasse pulvinar. In tortor, duis urna! Adipiscing duis facilisis mid ut, porta tincidunt odio urna quis massa in! Duis sed vel sit ultricies augue nisi mus nisi. Cursus est, vut duis et amet ac tempor ac elementum, scelerisque pulvinar in augue magna sociis massa nunc non integer, cum, odio, nec, mattis sociis lorem nunc, duis nec nunc, purus placerat proin augue mattis penatibus dis, mid non, non tincidunt porta purus mauris in sit augue in magna. Tortor integer scelerisque lacus mus sed? Porttitor et integer dapibus! Urna tincidunt lacus aenean et rhoncus.',
                'created_at' => '2016-10-30 22:03:01',
                'updated_at' => '2016-12-07 20:27:48',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'CDH',
                'details' => 'asda da sd asd asd',
                'created_at' => '2016-10-30 22:04:47',
                'updated_at' => '2016-12-07 20:28:12',
            ),
        ));
        
        
    }
}
