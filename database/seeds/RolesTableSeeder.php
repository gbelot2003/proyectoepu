<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'super',
                'display_name' => 'Super Admin',
                'description' => 'Super administrador',
                'created_at' => '2016-11-01 16:45:13',
                'updated_at' => '2016-11-01 16:45:15',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'admin',
                'display_name' => 'Administrador',
                'description' => 'Administrador',
                'created_at' => '2016-11-01 16:45:41',
                'updated_at' => '2016-11-01 16:45:42',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'editor',
                'display_name' => 'Editor',
                'description' => 'Editor de Noticias',
                'created_at' => '2016-11-01 16:46:02',
                'updated_at' => '2016-11-01 16:46:05',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'organiza',
                'display_name' => 'Organizacion',
                'description' => 'Pertenece a Organizacion',
                'created_at' => '2016-11-01 16:46:27',
                'updated_at' => '2016-11-01 16:46:28',
            ),
        ));
        
        
    }
}
