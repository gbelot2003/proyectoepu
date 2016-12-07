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
                'details' => 'Nisi! Proin adipiscing integer, a integer sed dapibus tristique sit, urna in. Aliquet, natoque parturient adipiscing urna lorem? Quis, vel ut! Adipiscing non enim, in lorem ultrices ultrices sed lorem. Scelerisque sit elementum rhoncus sit lorem in nisi purus facilisis, porttitor adipiscing augue placerat duis, urna facilisis porttitor, v',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Institucion2',
                'url' => 'http://local2.com',
                'details' => 'Proin enim mid nunc integer, sit mattis phasellus dictumst velit ut integer? In tincidunt! Ac non. Mattis, cras dis, arcu natoque sit enim! Turpis? Tincidunt! Scelerisque adipiscing cursus est. Enim porttitor nisi. In! Nisi elit vel vut porttitor a rhoncus ridiculus a platea in vel lundium duis? Nisi placerat pid ridiculus etiam, sit a ultr',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Institucion3',
                'url' => 'http://local3.com',
                'details' => 'Vut nisi purus adipiscing! Cursus! Porttitor placerat proin et rhoncus, vel! In tristique tortor! Sit nisi habitasse, hac aenean, sagittis et magnis proin pid dapibus dolor risus pellentesque in, ac ridiculus, sagittis a, dis, vut cursus non adipiscing, urna, hac integer, elementum pellentesque arcu porttitor? Aliquam scelerisque et augue mag',
            ),
        ));
        
        
    }
}
