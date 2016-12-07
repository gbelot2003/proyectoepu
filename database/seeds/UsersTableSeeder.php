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
                'organizacion_id' => 1,
                'status' => 1,
                'remember_token' => '3LprhnbRSqQkj1i92EOJ9c3oPdgAO1gjg618M21FvA0qMRhdgKFNK7qBuMOw',
                'created_at' => '2016-10-24 07:58:14',
                'updated_at' => '2016-12-07 19:57:37',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'amaehop',
                'email' => 'zila@hotmail.com',
                'password' => '$2y$10$w9FrFfs0Y8mCJOLbXpi.QuUvyVXfEK0rXDR4MxvTOH0fSyJlmDfSS',
                'organizacion_id' => 1,
                'status' => 1,
                'remember_token' => 'FFUsyP5br8lOsy4LE4pyJ7EZPBjfvgN1sqBnGhcRyiaqVkRjmozDBsYFeVHn',
                'created_at' => '2016-12-03 23:22:39',
                'updated_at' => '2016-12-07 20:28:40',
            ),
        ));
        
        
    }
}
