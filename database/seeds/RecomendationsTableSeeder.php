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
                'typeofrecomendations_id' => 1,
                'country_id' => 1,
                'name' => 'Implicar mas activamente a la sociedad civil en la elaboración de políticas,estrategias y planes de acción nacionales de derechos humanos.	',
                'details' => '',
                'total' => 0.0,
                'created_at' => '2016-12-14 20:56:41',
                'updated_at' => '2016-12-14 21:59:55',
            ),
            1 => 
            array (
                'id' => 2,
                'typeofrecomendations_id' => 1,
                'country_id' => 1,
                'name' => 'Intensificar los esfuerzos destinados a reformar el sector de la justicia y la seguridad con miras a combatir la corrupcion y reforzar la independencia del poder judicial,entre otras cosas fomentando una supervision y un control disciplinario efectivo de',
                'details' => '',
                'total' => 0.0,
                'created_at' => '2016-12-14 21:25:53',
                'updated_at' => '2016-12-14 22:07:49',
            ),
            2 => 
            array (
                'id' => 8,
                'typeofrecomendations_id' => 1,
                'country_id' => 1,
                'name' => 'Adoptar medidas adicionales para garantizar la igualdad de acceso a de las mujeres a servicios de salud adecuados, en especial a servicios de salud sexual y reproductiva,y ratificar el OP-CEDAW',
                'details' => '',
                'total' => 0.0,
                'created_at' => '2016-12-14 23:21:06',
                'updated_at' => '2016-12-14 23:21:06',
            ),
            3 => 
            array (
                'id' => 9,
                'typeofrecomendations_id' => 1,
                'country_id' => 2,
                'name' => 'Intensificar las políticas socioeconomicas para permitir la participación activa de las personas afrodescendientes en la esfera económica, social y política.',
                'details' => '',
                'total' => 0.0,
                'created_at' => '2016-12-14 23:23:50',
                'updated_at' => '2016-12-14 23:23:50',
            ),
            4 => 
            array (
                'id' => 10,
                'typeofrecomendations_id' => 1,
                'country_id' => 2,
                'name' => 'Reforzar el sistema de proteccion de las personas en situacion de riesgo,sobre todo las mujeres y los niños',
                'details' => '',
                'total' => 0.0,
                'created_at' => '2016-12-14 23:24:16',
                'updated_at' => '2016-12-14 23:24:16',
            ),
            5 => 
            array (
                'id' => 11,
                'typeofrecomendations_id' => 1,
                'country_id' => 3,
                'name' => 'Seguir aplicando la política Publica y plan nacional de acción en derechos humanos 2013-2022',
                'details' => '',
                'total' => 0.0,
                'created_at' => '2016-12-14 23:24:42',
                'updated_at' => '2016-12-14 23:24:42',
            ),
            6 => 
            array (
                'id' => 12,
                'typeofrecomendations_id' => 1,
                'country_id' => 3,
                'name' => 'Continuar con su política de reducción de la violencia contra los niños y jóvenes',
                'details' => '',
                'total' => 0.0,
                'created_at' => '2016-12-14 23:25:08',
                'updated_at' => '2016-12-14 23:25:08',
            ),
            7 => 
            array (
                'id' => 13,
                'typeofrecomendations_id' => 1,
                'country_id' => 4,
                'name' => 'Fortalecer el funcionamiento de la comision nacional contra la discriminacion racial,el racismo,la xenofobia y las formas conexas de intolerancia, a fin de favorecer los programas de dialogo interestructural,tolerancoa y sensibilizacion',
                'details' => '',
                'total' => 0.0,
                'created_at' => '2016-12-14 23:25:59',
                'updated_at' => '2016-12-14 23:25:59',
            ),
            8 => 
            array (
                'id' => 14,
                'typeofrecomendations_id' => 1,
                'country_id' => 4,
                'name' => 'Continuar profundizando las medidas judiciales y administrativas iniciadas para hacer efectiva la investigacion y sancion de los autores de actos de violencia,en particular aquellos dirigidos contra los defensores de los derechos humanos',
                'details' => '',
                'total' => 0.0,
                'created_at' => '2016-12-14 23:26:27',
                'updated_at' => '2016-12-14 23:26:27',
            ),
            9 => 
            array (
                'id' => 15,
                'typeofrecomendations_id' => 1,
                'country_id' => 5,
                'name' => 'Garantizar la libertad de expresion y adoptar las medidas para acabar con las amenazas y los ataques contra periodistas y defensores de los derechos humanos incluidas las personas lesbianas gais,bisexuales,transgenero e intersexuales',
                'details' => '',
                'total' => 0.0,
                'created_at' => '2016-12-14 23:26:57',
                'updated_at' => '2016-12-14 23:26:57',
            ),
            10 => 
            array (
                'id' => 16,
                'typeofrecomendations_id' => 1,
                'country_id' => 5,
                'name' => 'Seguir reforzando la respuesta del sistema de justicia penal a la delicuencia violenta contra mujeres y niñas y en particular las medidas de apoyo',
                'details' => '',
                'total' => 0.0,
                'created_at' => '2016-12-14 23:27:35',
                'updated_at' => '2016-12-14 23:27:35',
            ),
            11 => 
            array (
                'id' => 17,
                'typeofrecomendations_id' => 1,
                'country_id' => 1,
                'name' => 'Acabar, en la ley y en la practica con la discriminación de que son victimas los pueblos indígenas y afrohondureños ,y reforzar la protección de las personas lesbianas, gais, bisexuales, transgenero e intersexuales.',
                'details' => '',
                'total' => 0.0,
                'created_at' => '2016-12-14 23:29:15',
                'updated_at' => '2016-12-14 23:29:15',
            ),
            12 => 
            array (
                'id' => 18,
                'typeofrecomendations_id' => 1,
                'country_id' => 6,
                'name' => 'Adoptar medidas eficaces para adecuar las condiciones de detención a las normas internacionales , en particular reduciendo el hacinamiento y la violencia entre los reclusos .',
                'details' => '',
                'total' => 0.0,
                'created_at' => '2016-12-14 23:30:43',
                'updated_at' => '2016-12-14 23:30:43',
            ),
            13 => 
            array (
                'id' => 19,
                'typeofrecomendations_id' => 1,
                'country_id' => 6,
                'name' => 'Investigar de manera rápida e imparcial las denuncias de represalias contra periodista y defensores de derechos humanos, y velar que los responsables rindan cuentas de sus actos.',
                'details' => '',
                'total' => 0.0,
                'created_at' => '2016-12-14 23:31:05',
                'updated_at' => '2016-12-14 23:31:05',
            ),
            14 => 
            array (
                'id' => 20,
                'typeofrecomendations_id' => 1,
                'country_id' => 6,
            'name' => 'Ratificar protocolo facultativo de la convención sobre la eliminación de todas las formas de discriminación contra la mujer (PO-CEDAW)',
                'details' => '',
                'total' => 0.0,
                'created_at' => '2016-12-14 23:31:36',
                'updated_at' => '2016-12-14 23:31:36',
            ),
            15 => 
            array (
                'id' => 21,
                'typeofrecomendations_id' => 1,
                'country_id' => 7,
                'name' => 'Garantizar la protección y el acceso a la justicia de las mujeres victimas de la violencia.',
                'details' => '',
                'total' => 0.0,
                'created_at' => '2016-12-14 23:32:00',
                'updated_at' => '2016-12-14 23:32:00',
            ),
            16 => 
            array (
                'id' => 22,
                'typeofrecomendations_id' => 1,
                'country_id' => 7,
                'name' => 'Velar por que todas denuncias de violaciones de los derechos humanos y otros abusos cometidos por la policía, las fuerzas armadas o miembros de las empresas privadas de seguridad se investiguen de manera rápida,independiente y exhaustiva, y porque los res',
                'details' => '',
                'total' => 0.0,
                'created_at' => '2016-12-14 23:32:48',
                'updated_at' => '2016-12-14 23:34:26',
            ),
            17 => 
            array (
                'id' => 23,
                'typeofrecomendations_id' => 1,
                'country_id' => 7,
                'name' => 'Aprobar y aplicar la ley de protección de defensores de derechos humanos,periodistas,comunicadores sociales y operadores de justicia y asignar suficientes recursos humanos y financieros para establecer un mecanismo de estado eficaz que proteja a las perso',
                'details' => '',
                'total' => 0.0,
                'created_at' => '2016-12-14 23:33:09',
                'updated_at' => '2016-12-14 23:35:20',
            ),
            18 => 
            array (
                'id' => 24,
                'typeofrecomendations_id' => 1,
                'country_id' => 8,
                'name' => 'Reforzar las instituciones nacionales encargadas de promover y proteger los derechos humanos, con miras a fomentar el acceso a la justicia,en particular de los grupos mas vulnerables,como las mujeres,los ancianos, los niños,los pueblos indígenas, las pers',
                'details' => '',
                'total' => 0.0,
                'created_at' => '2016-12-14 23:33:41',
                'updated_at' => '2016-12-14 23:33:41',
            ),
        ));
        
        
    }
}
