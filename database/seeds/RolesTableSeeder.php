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
                'name' => 'Super Admin',
                'display_name' => 'super',
                'description' => 'Super Administrador del Sistema',
                'created_at' => '2016-10-29 00:56:21',
                'updated_at' => '2016-10-29 00:56:22',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Administrador',
                'display_name' => 'admin',
                'description' => 'Administrador del Sistema',
                'created_at' => '2016-10-29 00:56:47',
                'updated_at' => '2016-10-29 00:56:49',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Editor',
                'display_name' => 'editor',
                'description' => 'Editor del Sistema',
                'created_at' => '2016-10-29 00:57:37',
                'updated_at' => '2016-10-29 00:57:38',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Miembro de Organización',
                'display_name' => 'organ',
                'description' => 'Miebro de Organización aliada',
                'created_at' => '2016-10-29 00:58:45',
                'updated_at' => '2016-10-29 00:58:48',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Usuario Registrado',
                'display_name' => 'registrado',
                'description' => 'Usuario Registrado',
                'created_at' => '2016-10-29 00:59:20',
                'updated_at' => '2016-10-29 00:59:23',
            ),
        ));
        
        
    }
}
