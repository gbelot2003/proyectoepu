<?php

use Illuminate\Database\Seeder;

class CalificacionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('calificacions')->delete();
        
        \DB::table('calificacions')->insert(array (
            0 => 
            array (
                'id' => 3,
                'recomendacion_id' => 4,
                'documento_url' => 'SugarCRM Developer-s Manual Customize and extend SugarCRM.pdf',
                'calificacion' => 5,
                'details' => 'Arcu tortor, nisi, purus, sagittis etiam. Aliquam elit, montes. Porttitor integer, et rhoncus ac scelerisque ut? Tristique pulvinar amet dapibus tincidunt adipiscing placerat tincidunt nascetur et tempor! Dignissim et phasellus enim nec purus egestas tortor integer, egestas dolor? Odio nec lectus mus? Diam facilisis urna ultrices vel sed enim elementum? Mus, ac! Tristique turpis lacus ridiculus porta cras odio phasellus! Platea integer porta turpis natoque enim? Lectus tristique, enim sit turpis penatibus, a diam tristique, cum porta pulvinar tempor diam, natoque in magnis sed, non turpis, massa rhoncus sed placerat, integer eu est porttitor. Etiam, amet! A sagittis odio, turpis? Aliquet urna tincidunt sed! Cursus? Sagittis dis integer, pulvinar, sed quis cras tincidunt mid porttitor augue turpis augue, sed nec.

Ac ac a turpis massa! Habitasse et? Ac turpis vut, amet, mattis, est non ridiculus ac nascetur! Lacus habitasse vel nascetur lorem, augue! Et dapibus? Aenean augue eu platea lacus hac nec, adipiscing ac lorem vel lorem magnis aliquam natoque tincidunt natoque sit arcu, integer cras integer? Tristique a, aenean scelerisque? Sed porttitor porta in urna et duis rhoncus, purus dolor placerat adipiscing dignissim, rhoncus adipiscing lundium sociis natoque dis, mid, adipiscing turpis ac urna sed vel. Sit ut, rhoncus dapibus, ultrices ut integer phasellus porta tortor platea, vel, elit etiam vel facilisis tortor ac montes integer velit enim, integer. Quis vel velit mauris, pulvinar mus tincidunt lacus magnis platea rhoncus? In scelerisque arcu odio dis auctor nisi nisi.

',
                'user_id' => 1,
                'created_at' => '2016-11-03 06:45:31',
                'updated_at' => '2016-11-03 06:45:31',
                'status'    => 1
            ),
            1 => 
            array (
                'id' => 4,
                'recomendacion_id' => 4,
                'documento_url' => 'Propuestas páginas web.docx',
                'calificacion' => 5,
                'details' => 'Arcu tortor, nisi, purus, sagittis etiam. Aliquam elit, montes. Porttitor integer, et rhoncus ac scelerisque ut? Tristique pulvinar amet dapibus tincidunt adipiscing placerat tincidunt nascetur et tempor! Dignissim et phasellus enim nec purus egestas tortor integer, egestas dolor? Odio nec lectus mus? Diam facilisis urna ultrices vel sed enim elementum? Mus, ac! Tristique turpis lacus ridiculus porta cras odio phasellus! Platea integer porta turpis natoque enim? Lectus tristique, enim sit turpis penatibus, a diam tristique, cum porta pulvinar tempor diam, natoque in magnis sed, non turpis, massa rhoncus sed placerat, integer eu est porttitor. Etiam, amet! A sagittis odio, turpis? Aliquet urna tincidunt sed! Cursus? Sagittis dis integer, pulvinar, sed quis cras tincidunt mid porttitor augue turpis augue, sed nec.

Ac ac a turpis massa! Habitasse et? Ac turpis vut, amet, mattis, est non ridiculus ac nascetur! Lacus habitasse vel nascetur lorem, augue! Et dapibus? Aenean augue eu platea lacus hac nec, adipiscing ac lorem vel lorem magnis aliquam natoque tincidunt natoque sit arcu, integer cras integer? Tristique a, aenean scelerisque? Sed porttitor porta in urna et duis rhoncus, purus dolor placerat adipiscing dignissim, rhoncus adipiscing lundium sociis natoque dis, mid, adipiscing turpis ac urna sed vel. Sit ut, rhoncus dapibus, ultrices ut integer phasellus porta tortor platea, vel, elit etiam vel facilisis tortor ac montes integer velit enim, integer. Quis vel velit mauris, pulvinar mus tincidunt lacus magnis platea rhoncus? In scelerisque arcu odio dis auctor nisi nisi.

sdfs',
                'user_id' => 2,
                'created_at' => '2016-11-03 06:51:02',
                'updated_at' => '2016-12-07 10:56:29',
                'status'    => 1
            ),
            2 => 
            array (
                'id' => 5,
                'recomendacion_id' => 5,
                'documento_url' => '3-de-agosto-2016-trackchn2.docx',
                'calificacion' => 4,
                'details' => 'Arcu tortor, nisi, purus, sagittis etiam. Aliquam elit, montes. Porttitor integer, et rhoncus ac scelerisque ut? Tristique pulvinar amet dapibus tincidunt adipiscing placerat tincidunt nascetur et tempor! Dignissim et phasellus enim nec purus egestas tortor integer, egestas dolor? Odio nec lectus mus? Diam facilisis urna ultrices vel sed enim elementum? Mus, ac! Tristique turpis lacus ridiculus porta cras odio phasellus! Platea integer porta turpis natoque enim? Lectus tristique, enim sit turpis penatibus, a diam tristique, cum porta pulvinar tempor diam, natoque in magnis sed, non turpis, massa rhoncus sed placerat, integer eu est porttitor. Etiam, amet! A sagittis odio, turpis? Aliquet urna tincidunt sed! Cursus? Sagittis dis integer, pulvinar, sed quis cras tincidunt mid porttitor augue turpis augue, sed nec.

Ac ac a turpis massa! Habitasse et? Ac turpis vut, amet, mattis, est non ridiculus ac nascetur! Lacus habitasse vel nascetur lorem, augue! Et dapibus? Aenean augue eu platea lacus hac nec, adipiscing ac lorem vel lorem magnis aliquam natoque tincidunt natoque sit arcu, integer cras integer? Tristique a, aenean scelerisque? Sed porttitor porta in urna et duis rhoncus, purus dolor placerat adipiscing dignissim, rhoncus adipiscing lundium sociis natoque dis, mid, adipiscing turpis ac urna sed vel. Sit ut, rhoncus dapibus, ultrices ut integer phasellus porta tortor platea, vel, elit etiam vel facilisis tortor ac montes integer velit enim, integer. Quis vel velit mauris, pulvinar mus tincidunt lacus magnis platea rhoncus? In scelerisque arcu odio dis auctor nisi nisi.

',
                'user_id' => 1,
                'created_at' => '2016-11-03 09:58:54',
                'updated_at' => '2016-12-07 10:56:47',
                'status'    => 1
            ),
            3 => 
            array (
                'id' => 6,
                'recomendacion_id' => 3,
            'documento_url' => '229387-listado (1).pdf',
                'calificacion' => 3,
                'details' => 'Arcu tortor, nisi, purus, sagittis etiam. Aliquam elit, montes. Porttitor integer, et rhoncus ac scelerisque ut? Tristique pulvinar amet dapibus tincidunt adipiscing placerat tincidunt nascetur et tempor! Dignissim et phasellus enim nec purus egestas tortor integer, egestas dolor? Odio nec lectus mus? Diam facilisis urna ultrices vel sed enim elementum? Mus, ac! Tristique turpis lacus ridiculus porta cras odio phasellus! Platea integer porta turpis natoque enim? Lectus tristique, enim sit turpis penatibus, a diam tristique, cum porta pulvinar tempor diam, natoque in magnis sed, non turpis, massa rhoncus sed placerat, integer eu est porttitor. Etiam, amet! A sagittis odio, turpis? Aliquet urna tincidunt sed! Cursus? Sagittis dis integer, pulvinar, sed quis cras tincidunt mid porttitor augue turpis augue, sed nec.

Ac ac a turpis massa! Habitasse et? Ac turpis vut, amet, mattis, est non ridiculus ac nascetur! Lacus habitasse vel nascetur lorem, augue! Et dapibus? Aenean augue eu platea lacus hac nec, adipiscing ac lorem vel lorem magnis aliquam natoque tincidunt natoque sit arcu, integer cras integer? Tristique a, aenean scelerisque? Sed porttitor porta in urna et duis rhoncus, purus dolor placerat adipiscing dignissim, rhoncus adipiscing lundium sociis natoque dis, mid, adipiscing turpis ac urna sed vel. Sit ut, rhoncus dapibus, ultrices ut integer phasellus porta tortor platea, vel, elit etiam vel facilisis tortor ac montes integer velit enim, integer. Quis vel velit mauris, pulvinar mus tincidunt lacus magnis platea rhoncus? In scelerisque arcu odio dis auctor nisi nisi.

',
                'user_id' => 1,
                'created_at' => '2016-11-03 11:26:47',
                'updated_at' => '2016-11-03 11:26:47',
                'status'    => 1
            ),
            4 => 
            array (
                'id' => 7,
                'recomendacion_id' => 3,
                'documento_url' => 'Proceso-de-4-pasos-TrackHn-agosto-2016.pdf',
                'calificacion' => 5,
                'details' => 'kjhkj Arcu tortor, nisi, purus, sagittis etiam. Aliquam elit, montes. Porttitor integer, et rhoncus ac scelerisque ut? Tristique pulvinar amet dapibus tincidunt adipiscing placerat tincidunt nascetur et tempor! Dignissim et phasellus enim nec purus egestas tortor integer, egestas dolor? Odio nec lectus mus? Diam facilisis urna ultrices vel sed enim elementum? Mus, ac! Tristique turpis lacus ridiculus porta cras odio phasellus! Platea integer porta turpis natoque enim? Lectus tristique, enim sit turpis penatibus, a diam tristique, cum porta pulvinar tempor diam, natoque in magnis sed, non turpis, massa rhoncus sed placerat, integer eu est porttitor. Etiam, amet! A sagittis odio, turpis? Aliquet urna tincidunt sed! Cursus? Sagittis dis integer, pulvinar, sed quis cras tincidunt mid porttitor augue turpis augue, sed nec.

Ac ac a turpis massa! Habitasse et? Ac turpis vut, amet, mattis, est non ridiculus ac nascetur! Lacus habitasse vel nascetur lorem, augue! Et dapibus? Aenean augue eu platea lacus hac nec, adipiscing ac lorem vel lorem magnis aliquam natoque tincidunt natoque sit arcu, integer cras integer? Tristique a, aenean scelerisque? Sed porttitor porta in urna et duis rhoncus, purus dolor placerat adipiscing dignissim, rhoncus adipiscing lundium sociis natoque dis, mid, adipiscing turpis ac urna sed vel. Sit ut, rhoncus dapibus, ultrices ut integer phasellus porta tortor platea, vel, elit etiam vel facilisis tortor ac montes integer velit enim, integer. Quis vel velit mauris, pulvinar mus tincidunt lacus magnis platea rhoncus? In scelerisque arcu odio dis auctor nisi nisi.

',
                'user_id' => 1,
                'created_at' => '2016-11-03 16:36:00',
                'updated_at' => '2016-11-03 16:36:00',
                'status'    => 1
            ),
            5 => 
            array (
                'id' => 8,
                'recomendacion_id' => 5,
                'documento_url' => 'Cuadro Recs. CAT.doc',
                'calificacion' => 3,
                'details' => 'Nisi mus placerat non, integer porttitor hac lorem? Ut! Rhoncus quis placerat urna, sed a egestas! Pellentesque amet scelerisque magna elementum phasellus arcu urna etiam cras integer dictumst scelerisque odio? Mattis rhoncus enim magna pid! Habitasse, cum nec et mauris proin habitasse vel habitasse augue porta augue in augue mauris, in integer ut turpis? Vel nunc elementum tortor urna, scelerisque. Quis et phasellus egestas mattis lacus eros odio ridiculus enim sociis facilisis. Quis cras et nunc cras lectus etiam ultricies, porta dolor nascetur ultricies. Rhoncus? Risus velit pulvinar. Rhoncus augue. Enim parturient diam dis in, nec! Vut. Magna egestas ultricies, arcu ultricies nec enim integer urna penatibus magna, tortor sed, ac duis ut, ridiculus ac in scelerisque dapibus turpis dignissim.',
                'user_id' => 1,
                'created_at' => '2016-12-05 17:25:27',
                'updated_at' => '2016-12-05 17:25:27',
                'status'    => 1
            ),
            6 => 
            array (
                'id' => 9,
                'recomendacion_id' => 9,
                'documento_url' => 'Honduras_2007_National_Youth_Policy.pdf',
                'calificacion' => 3,
                'details' => 'Arcu platea in amet pellentesque eu ultrices, nisi, dignissim nisi risus nunc? Turpis platea magna, cras velit, amet, est aliquet, dis integer, mattis lorem, nunc dis enim rhoncus sociis porta ultricies risus rhoncus etiam, in scelerisque, sociis scelerisque velit auctor ultrices dictumst habitasse lectus augue velit, dignissim risus urna turpis augue rhoncus a cras, a, non ultricies tortor. Cum? Tortor enim placerat ridiculus velit! Adipiscing elementum dis integer nec magna dignissim turpis? Pulvinar scelerisque hac cras! Vut turpis arcu amet? Pulvinar nec rhoncus tincidunt pellentesque, ut elit dapibus pulvinar, eu, tincidunt cras scelerisque duis rhoncus mauris mus lorem, eros, magna porttitor proin cum magna scelerisque',
                'user_id' => 2,
                'created_at' => '2016-12-06 18:26:44',
                'updated_at' => '2016-12-07 10:57:46',
                'status'    => 1
            ),
            7 => 
            array (
                'id' => 10,
                'recomendacion_id' => 10,
                'documento_url' => 'Cuadro Recs. DESC.doc',
                'calificacion' => 5,
                'details' => 'Sit nec est urna vut. Turpis pid cras augue augue, pulvinar, purus? Nisi amet, nunc et, ac sed! Mid urna egestas sed platea tortor tortor etiam ultricies dapibus pid penatibus et mus, nunc ultricies scelerisque aliquam ut, sit ut penatibus enim tristique amet enim mus! Amet placerat purus! Sit phasellus nunc quis enim cursus, cursus, amet, vut, risus, a sit cum amet in lundium ut, adipiscing integer quis, turpis et integer ridiculus? Duis vel. Etiam tempor scelerisque, aliquet elit penatibus. Lectus, platea a, nunc? Magna ultricies! Nunc augue p',
                'user_id' => 1,
                'created_at' => '2016-12-07 19:12:20',
                'updated_at' => '2016-12-07 19:12:20',
                'status'    => 1
            ),
        ));
        
        
    }
}
