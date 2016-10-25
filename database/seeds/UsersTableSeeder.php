<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Gerardo Antonio Belot',
                'email' => 'gbelot2003@hotmail.com',
                'password' => '$2y$10$BIwOEScy0vTojRhqPWFa7.n4RmhBnnCotUoyp3qFhfOWxddSm4mDC',
                'remember_token' => NULL,
                'created_at' => '2016-10-24 07:58:14',
                'updated_at' => '2016-10-24 07:58:14',
            ),
        ));
        
        
    }
}
