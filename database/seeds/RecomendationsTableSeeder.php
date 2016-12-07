<?php

use Illuminate\Database\Seeder;

class RecomendationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('recomendations')->delete();
        
        \DB::table('recomendations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Formular y aplicar una política de control y reducción de armamentos.',
                'country_id' => 1,
                'total' => 3.5,
                'created_at' => '2016-10-28 02:05:10',
                'updated_at' => '2016-11-02 00:06:32',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Garantizar que todos los defensores de derechos humanos en Honduras puedan llevar a cabo sus actividades legitimas de derechos humanos de conformidad con la declaración sobre los defensores de derechos humanos.',
                'country_id' => 1,
                'total' => 4.2999999999999998,
                'created_at' => '2016-10-29 05:04:33',
                'updated_at' => '2016-11-02 00:06:17',
            ),
            2 => 
            array (
                'id' => 3,
            'name' => 'Ratificar el protocolo facultativo de la convención sobre la eliminación de todas las formas de discriminación contra la mujer (OP-CEDAW)',
                'country_id' => 10,
                'total' => 5.0,
                'created_at' => '2016-10-29 05:05:36',
                'updated_at' => '2016-11-02 00:05:57',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Asegurar la transparencia y la imparcialidad en el proceso de nombramiento de los jueces, aplicando procedimientos claros y criterios objetivos, y que el personal judicial no este sujeto a injerencias políticas.',
                'country_id' => 17,
                'total' => 2.2000000000000002,
                'created_at' => '2016-10-29 05:06:38',
                'updated_at' => '2016-11-02 00:05:26',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Cualquier tipo de datosCualquier tipo de datosCualquier tipo de datosCualquier tipo de datosCualquier tipo de datos Cualquier tipo de datos',
                'country_id' => 1,
                'total' => 0.0,
                'created_at' => '2016-12-05 17:20:50',
                'updated_at' => '2016-12-05 23:53:07',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Purus nascetur ac vut velit, habitasse, massa nec elementum placerat auctor, eros, in cum, tempor a lundium dis quis nascetur augue elementum nunc augue, velit sit platea tincidunt sit rhoncus.',
                'country_id' => 4,
                'total' => 0.0,
                'created_at' => '2016-12-05 23:51:02',
                'updated_at' => '2016-12-05 23:51:02',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Placerat tempor dapibus duis eros? Aliquam mattis nunc, amet, aenean auctor augue sit et urna nec amet lectus proin augue, amet sit lectus ridiculus augue adipiscing, rhoncus quis urna lorem ultrices velit, arcu ac porta. In quis turpis sed, dictumst eu l',
                'country_id' => 3,
                'total' => 0.0,
                'created_at' => '2016-12-05 23:51:26',
                'updated_at' => '2016-12-05 23:51:26',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Sagittis nascetur nec eu. Urna urna nisi enim urna nisi lorem, aliquet? Placerat ut augue, ut et, habitasse mus ultrices adipiscing vel nisi dignissim, parturient cursus magnis porta nec ridiculus cum natoque',
                'country_id' => 12,
                'total' => 0.0,
                'created_at' => '2016-12-05 23:56:09',
                'updated_at' => '2016-12-05 23:56:09',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Non dapibus. Magnis ac lectus cum sagittis placerat sit, adipiscing massa augue nunc cursus! Habitasse eu sed! Ridiculus in ridiculus magnis purus dis, aliquet et sed mauris tristique quis. ',
                'country_id' => 34,
                'total' => 0.0,
                'created_at' => '2016-12-05 23:56:55',
                'updated_at' => '2016-12-05 23:56:55',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Rhoncus porta massa? Vut platea penatibus integer. Placerat, sagittis dictumst scelerisque egestas sociis lorem. Duis dignissim nunc, mauris turpis montes! Cras elit, a porta. Et, lorem? Pulvinar. Tortor egestas dapibus?',
                'country_id' => 27,
                'total' => 0.0,
                'created_at' => '2016-12-06 08:43:18',
                'updated_at' => '2016-12-06 08:43:18',
            ),
        ));
        
        
    }
}
