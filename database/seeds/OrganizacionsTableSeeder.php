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
                'url' => 'http://clibrehonduras.com',
                'created_at' => '2016-10-30 15:11:35',
                'updated_at' => '2016-12-19 22:36:32',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'ACI Participa',
                'details' => 'Asociación para una ciudadanía participativa',
                'url' => 'http://aciparticipa.org/',
                'created_at' => '2016-10-30 21:55:34',
                'updated_at' => '2016-12-19 22:48:47',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'ADD',
                'details' => 'Asociación Danesa de Personas con Discapacidad',
                'url' => 'http://www.addla.org/honduras/ahlmys/',
                'created_at' => '2016-10-30 22:03:01',
                'updated_at' => '2016-12-19 22:47:53',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'CDH',
                'details' => 'Centro de Desarrollo Humano',
                'url' => 'http://www.centrocdh.org/',
                'created_at' => '2016-10-30 22:04:47',
                'updated_at' => '2016-12-19 22:49:18',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Alternativas y Oportunidades',
                'details' => 'ALTERNATIVAS Y OPORTUNIDADES',
                'url' => 'https://www.facebook.com/Alternativas-y-Oportunidades-144919902226932/',
                'created_at' => '2016-12-19 22:47:00',
                'updated_at' => '2016-12-19 22:47:00',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'AMIR',
                'details' => 'Asociación de Mujeres Intibucanas Renovadas AMIR',
                'url' => 'https://www.facebook.com/AMIRLenca/',
                'created_at' => '2016-12-19 22:50:05',
                'updated_at' => '2016-12-19 22:50:05',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'ANAFAE',
                'details' => 'Asociación Nacional para el Fomento de la Agricultura Ecológica ANAFAE',
                'url' => 'http://www.anafae.org/',
                'created_at' => '2016-12-19 22:50:54',
                'updated_at' => '2016-12-19 22:50:54',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'CEPRES',
                'details' => 'Centro de Educación y Prevención en Salud, Sexualidad y Sida CEPRES',
                'url' => 'https://www.facebook.com/organizacion.cepres',
                'created_at' => '2016-12-19 22:53:02',
                'updated_at' => '2016-12-19 22:53:02',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'CEHPRODEC',
                'details' => 'Centro Hondureño de Promoción para el Desarrollo Comunitario',
                'url' => 'http://www.cehprodec.org/',
                'created_at' => '2016-12-19 22:54:45',
                'updated_at' => '2016-12-19 22:54:45',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'CESPAD',
                'details' => 'Centro de Estudio para la Democracia ',
                'url' => 'http://cespad.org/',
                'created_at' => '2016-12-19 22:57:17',
                'updated_at' => '2016-12-19 22:57:17',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'COIPRODEN',
                'details' => 'Coordinadora de Instituciones Privadas pro las Niñas, Niños, Adolescentes, Jóvenes y sus Derechos',
                'url' => 'http://www.coiprodenhn.org/',
                'created_at' => '2016-12-19 22:57:53',
                'updated_at' => '2016-12-19 22:57:53',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'CPTRT',
                'details' => 'Centro para la Prevención, Tratamiento y Rehabilitación de Víctimas de la Tortura y sus Familiares',
                'url' => 'http://www.cptrt.net/',
                'created_at' => '2016-12-19 22:58:43',
                'updated_at' => '2016-12-19 23:09:39',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'EROC',
                'details' => 'Espacio Regional de Occidente EROC',
                'url' => 'http://www.erochn.org/',
                'created_at' => '2016-12-19 22:59:29',
                'updated_at' => '2016-12-19 22:59:29',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'FETRIPH',
                'details' => 'Federación de Tribus Indígenas de Honduras',
                'url' => 'http://descargascdihh.ihah.hn/pdf/aeihah/CAJA0215/correspondencia/folderN06/1995julio06.PDF',
                'created_at' => '2016-12-19 23:01:34',
                'updated_at' => '2016-12-19 23:01:34',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'FIAN HONDURAS',
                'details' => 'FIAN HONDURAS',
                'url' => 'http://www.fian.hn/fianhonduras/',
                'created_at' => '2016-12-19 23:02:28',
                'updated_at' => '2016-12-19 23:02:28',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'FONAMIH',
                'details' => 'Foro Nacional para las Migraciones',
                'url' => 'http://www.fonamihn.org/blank-csgz',
                'created_at' => '2016-12-19 23:03:37',
                'updated_at' => '2016-12-19 23:03:37',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'JPIC FRANCISCANOS',
                'details' => ' Justicia, Paz e Integridad de la Creación JPIC FRANCISCANOS',
                'url' => 'http://www.ofm.org/ofm/?page_id=412&lang=es',
                'created_at' => '2016-12-19 23:04:24',
                'updated_at' => '2016-12-19 23:04:24',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'MUCA',
                'details' => 'Movimiento Unificado de Campesinos del Aguán MUCA',
                'url' => 'http://movimientomuca.blogspot.com/',
                'created_at' => '2016-12-19 23:05:00',
                'updated_at' => '2016-12-19 23:05:00',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'OPDHA',
                'details' => 'Observatorio Permanente de Derechos Humanos de El Aguán',
                'url' => 'http://mioaguan.blogspot.com/',
                'created_at' => '2016-12-19 23:06:11',
                'updated_at' => '2016-12-19 23:06:11',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Plataforma Internacional contra la Impunidad',
                'details' => 'Plataforma Internacional contra la Impunidad',
                'url' => '',
                'created_at' => '2016-12-19 23:09:15',
                'updated_at' => '2016-12-19 23:09:15',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'PEN HONDURAS',
                'details' => 'PEN HONDURAS',
                'url' => 'http://penhonduras.org/',
                'created_at' => '2016-12-19 23:11:09',
                'updated_at' => '2016-12-19 23:11:09',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'PROYECTO VIH RURAL',
                'details' => 'PROYECTO VIH RURAL',
                'url' => '',
                'created_at' => '2016-12-19 23:13:06',
                'updated_at' => '2016-12-19 23:13:11',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'RED BALANCE',
                'details' => '- RED BALANCE',
                'url' => 'http://www.redbalance.org/',
                'created_at' => '2016-12-19 23:15:23',
                'updated_at' => '2016-12-19 23:15:23',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'VIH REDCA',
                'details' => 'Red Centroamericana de Personas Viviendo con VIH REDCA',
                'url' => 'http://www.redca.org/',
                'created_at' => '2016-12-19 23:16:00',
                'updated_at' => '2016-12-19 23:16:00',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'LGTB Arcoiris de Honduras',
                'details' => 'Asociación LGTB Arcoiris de Honduras;',
                'url' => 'https://www.facebook.com/lgtp.arcoiris/',
                'created_at' => '2016-12-19 23:17:48',
                'updated_at' => '2016-12-19 23:17:48',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'AJD',
            'details' => 'Asociación de Jueces por la Democracia (AJD); ',
                'url' => 'https://www.facebook.com/Asociaci%C3%B3n-de-Jueces-por-la-Democracia-664518570350830/',
                'created_at' => '2016-12-19 23:18:21',
                'updated_at' => '2016-12-19 23:18:21',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'AIDEVISH',
                'details' => 'Asociación Intermunicipal de Desarrollo y Vigilancia Social de Honduras ',
                'url' => 'https://www.facebook.com/AIDEVISH/',
                'created_at' => '2016-12-19 23:19:16',
                'updated_at' => '2016-12-19 23:19:16',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'ASONAPVSIDA',
                'details' => 'Asociación Nacional de Personas viviendo con SIDA',
                'url' => '',
                'created_at' => '2016-12-19 23:21:37',
                'updated_at' => '2016-12-19 23:21:37',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'CARITAS',
                'details' => 'CARITAS – Diócesis de San Pedro Sula',
                'url' => 'http://www.caritas.org/where-we-are/latin-america/honduras/',
                'created_at' => '2016-12-19 23:22:14',
                'updated_at' => '2016-12-19 23:22:14',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'CDM',
                'details' => 'Centro de Derechos de Mujeres',
                'url' => 'http://www.derechosdelamujer.org/',
                'created_at' => '2016-12-19 23:22:35',
                'updated_at' => '2016-12-19 23:22:35',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'CEM-H',
                'details' => 'Centro de Estudios de la Mujer Honduras ',
                'url' => 'http://cemh.org.hn/wp/',
                'created_at' => '2016-12-19 23:23:12',
                'updated_at' => '2016-12-19 23:23:12',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'CIPRODEH',
                'details' => 'Centro de Investigación y Promoción de Derechos Humanos ',
                'url' => 'http://ciprodeh.org.hn/',
                'created_at' => '2016-12-19 23:24:28',
                'updated_at' => '2016-12-19 23:24:28',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Colectivo Gemas',
                'details' => 'Colectivo Gemas',
                'url' => 'https://www.facebook.com/pg/diversidadlgtbhn/photos/?tab=album&album_id=253730788109350',
                'created_at' => '2016-12-19 23:25:01',
                'updated_at' => '2016-12-19 23:25:01',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Colectivo Unidad Color Rosa',
                'details' => 'Colectivo Unidad Color Rosa',
                'url' => 'https://www.facebook.com/Colectivo-Unidad-Color-Rosa-695817700440206/',
                'created_at' => '2016-12-19 23:25:41',
                'updated_at' => '2016-12-19 23:25:41',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'COFADEH',
                'details' => 'Comité de Familiares de Detenidos Desaparecidos de Honduras ',
                'url' => 'http://www.cofadeh.org/html/historia/accion_educativa.html',
                'created_at' => '2016-12-19 23:26:11',
                'updated_at' => '2016-12-19 23:26:11',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'COFAMIPRO',
                'details' => 'Comité de Familiares de Migrantes Desaparecidos de El Progreso',
                'url' => 'https://www.facebook.com/Cofamipro-Comite-de-Familiares-de-Migrantes-Desaparecidos-del-Progreso-107037279389677/',
                'created_at' => '2016-12-19 23:26:39',
                'updated_at' => '2016-12-19 23:26:39',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Comunidad Gay Sampedrana',
                'details' => 'Comunidad Gay Sampedrana',
                'url' => 'http://comunidadgaysampedrana.blogspot.com/',
                'created_at' => '2016-12-19 23:27:23',
                'updated_at' => '2016-12-19 23:27:23',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Convergencia por los Derechos Humanos',
                'details' => 'Convergencia por los Derechos Humanos de la Zona Nor Occidental',
                'url' => 'https://www.facebook.com/Convergencia-por-los-Derechos-Humanos-636317993103917/',
                'created_at' => '2016-12-19 23:28:17',
                'updated_at' => '2016-12-19 23:28:17',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Crisálidas de Villanueva;',
                'details' => 'Crisálidas de Villanueva;',
                'url' => 'https://www.facebook.com/crisalidatrans/',
                'created_at' => '2016-12-19 23:28:59',
                'updated_at' => '2016-12-19 23:28:59',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'EMIH',
            'details' => 'Equipo de Monitoreo Independiente de Honduras (EMIH);',
                'url' => 'http://es.archive.maquilasolidarity.org/node/777',
                'created_at' => '2016-12-19 23:29:58',
                'updated_at' => '2016-12-19 23:29:58',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'Equipo de Reflexión',
                'details' => 'El Equipo de Reflexión, Investigación y Comunicación ERIC-SJ',
                'url' => 'http://www.cpalsocial.org/centro_134.html',
                'created_at' => '2016-12-19 23:30:48',
                'updated_at' => '2016-12-19 23:30:48',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Feministas Universitarias',
                'details' => 'Feministas Universitarias',
                'url' => 'http://cofemun.wix.com/inicio',
                'created_at' => '2016-12-19 23:32:08',
                'updated_at' => '2016-12-19 23:32:08',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'COPEMH',
                'details' => 'Frente Amplio del COPEMH',
                'url' => 'https://www.copemh.org/',
                'created_at' => '2016-12-19 23:32:58',
                'updated_at' => '2016-12-19 23:32:58',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'Foro de Mujeres por la Vida;',
                'details' => 'Foro de Mujeres por la Vida;',
                'url' => 'http://www.forodemujeresporlavida.org/',
                'created_at' => '2016-12-19 23:33:35',
                'updated_at' => '2016-12-19 23:33:35',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'FOSDEH',
                'details' => 'Foro Social de la Deuda Externa y Desarrollo de Honduras ',
                'url' => 'http://fosdeh.com/',
                'created_at' => '2016-12-19 23:34:39',
                'updated_at' => '2016-12-19 23:34:39',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'JASS en Honduras',
                'details' => 'JASS en Honduras',
                'url' => 'www.justassociates.org/en/honduras',
                'created_at' => '2016-12-19 23:35:45',
                'updated_at' => '2016-12-19 23:35:45',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'MADJ',
                'details' => 'Movimiento Amplio por la Dignidad y la Justicia',
                'url' => 'http://movimientoporladignidad.blogspot.com/',
                'created_at' => '2016-12-19 23:36:28',
                'updated_at' => '2016-12-19 23:36:28',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'MDR',
                'details' => 'Movimiento Diversidad en Resistencia',
                'url' => 'http://resistediverso.blogspot.com/',
                'created_at' => '2016-12-19 23:37:46',
                'updated_at' => '2016-12-19 23:37:46',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'Visitación Padilla',
                'details' => 'Movimiento de Mujeres por la Paz “Visitación Padilla”;',
                'url' => '',
                'created_at' => '2016-12-19 23:39:21',
                'updated_at' => '2016-12-19 23:39:21',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'Red de Mujeres Jóvenes de Cortés',
                'details' => 'Red de Mujeres Jóvenes de Cortés',
                'url' => 'http://www.calala.org/2015/02/red-de-mujeres-jovenes-de-cortes-nuestro-cuerpo-nuestro-territorio/',
                'created_at' => '2016-12-19 23:39:57',
                'updated_at' => '2016-12-19 23:39:57',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'Red de Mujeres Unidas de Colonia “Ramón Amaya Amador”',
                'details' => 'Red de Mujeres Unidas de Colonia “Ramón Amaya Amador”',
                'url' => '',
                'created_at' => '2016-12-19 23:40:16',
                'updated_at' => '2016-12-19 23:40:16',
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'RPOSC',
                'details' => 'Red de Participación de Organizaciones de Sociedad Civil Siguatepeque',
                'url' => '',
                'created_at' => '2016-12-19 23:40:50',
                'updated_at' => '2016-12-19 23:40:50',
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'Red Nacional de Defensoras de Derechos Humanos en Honduras;',
                'details' => 'Red Nacional de Defensoras de Derechos Humanos en Honduras;',
                'url' => 'http://redefensorashn.blogspot.com/',
                'created_at' => '2016-12-19 23:41:34',
                'updated_at' => '2016-12-19 23:41:34',
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'Tribuna de Mujeres contra los Femicidios',
                'details' => 'Tribuna de Mujeres contra los Femicidios',
                'url' => 'http://www.contralosfemicidios.hn/quienes-somos/tribuna-de-mujeres',
                'created_at' => '2016-12-19 23:42:10',
                'updated_at' => '2016-12-19 23:42:10',
            ),
        ));
        
        
    }
}
