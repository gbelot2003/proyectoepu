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
                'remember_token' => 'rf5BJXynxRmWY9v1sDn5i8zTuCS706MV15X0yIfhnoDWIFxHweYKsUzTAei1',
                'created_at' => '2016-10-24 07:58:14',
                'updated_at' => '2016-12-09 19:41:55',
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
            2 => 
            array (
                'id' => 3,
                'name' => 'loreli',
                'email' => 'loreli@comarca.com',
                'password' => '$2y$10$3abLclZRc3MeDQAbBWKPwekQFwjnwY7sAOffdg8.FDiJ6xF4QI/4m',
                'organizacion_id' => 4,
                'status' => 1,
                'remember_token' => 'SX0P67WWdNyjrq1PRwxEtK9PkgSYP9dHxvSB5Y9k4EBrEvctOeCLvhcd8UYQ',
                'created_at' => '2016-12-09 19:53:33',
                'updated_at' => '2016-12-19 22:20:52',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'ada liza',
                'email' => 'ada@comca.com',
                'password' => '$2y$10$1qWclx1OfsNetKNm.sNIb.q.pIa4SF07GIhqWzSDebj9A.kSfWwyu',
                'organizacion_id' => 1,
                'status' => 1,
                'remember_token' => 'HgESkDAOtRFNnU9AiChR6OZD6gPQqOYEby9ssMJMOTdB66PCXiTaD5N1fq7Z',
                'created_at' => '2016-12-09 20:01:58',
                'updated_at' => '2016-12-19 22:20:24',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'lolo',
                'email' => 'lolo@comca.com',
                'password' => '$2y$10$n.C07ShuGNS08RcK27OEa.BVQdxE9XrMHTbD8rOgmckSfDYovvhEW',
                'organizacion_id' => 1,
                'status' => 1,
                'remember_token' => 'plrvW643vAZATiZbg2eOTmCXqhQ0ccwOHGp7UVTfYnGxSCxZK3rw2qA9AOCC',
                'created_at' => '2016-12-09 21:29:05',
                'updated_at' => '2016-12-19 22:20:40',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Josue Hernandez',
                'email' => 'coordinacioncepres@gmail.com',
                'password' => '$2y$10$Xa9pIlf5omlaByEK9zNjmOtuguWLMVIAlYwbDOC8HZmpzNYmxY9Ey',
                'organizacion_id' => 1,
                'status' => 1,
                'remember_token' => 'WdOiwFIOMGKFztrz92paCt5UD4CgwAO43PP0FNWjQmihQoitQzGZHpgetbUJ',
                'created_at' => '2016-12-09 21:46:05',
                'updated_at' => '2016-12-09 22:33:09',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'daryana palada',
                'email' => 'mariposastrans@gmail.com',
                'password' => '$2y$10$eDc2JJWRxHbXcyhBLMdlJ.ye6.bjZZKP1nffVi9ZiZPijgUhVUV7a',
                'organizacion_id' => 2,
                'status' => 1,
                'remember_token' => NULL,
                'created_at' => '2016-12-09 21:55:05',
                'updated_at' => '2016-12-19 22:21:23',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Jimmy Bermúdez ',
                'email' => 'eduper92@gmail.com',
                'password' => '$2y$10$7hwmFceYjz7Is3Q8u.7Uzu6gURhymkAYCNlXdUY1fle6ddxHcHBLa',
                'organizacion_id' => 1,
                'status' => 1,
                'remember_token' => NULL,
                'created_at' => '2016-12-09 21:57:59',
                'updated_at' => '2016-12-09 22:00:15',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Natalia Lozano',
                'email' => 'lozano.naty@gmail.com',
                'password' => '$2y$10$WVkFx87k6UMEevYrWFQ/6efNEPnkL9tztndkexR8jskmJkK4qyI9O',
                'organizacion_id' => 1,
                'status' => 1,
                'remember_token' => NULL,
                'created_at' => '2016-12-09 21:58:04',
                'updated_at' => '2016-12-09 22:00:23',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Carmen Johana Escobar Ruiz',
                'email' => 'cajoesru@hotmail.com',
                'password' => '$2y$10$gAf.enx/xbSFWDjApZwrUOA2CL8nlo7b0yKnlg5bLINZ8zWCyWDEa',
                'organizacion_id' => 1,
                'status' => 1,
                'remember_token' => NULL,
                'created_at' => '2016-12-09 22:00:12',
                'updated_at' => '2016-12-09 22:00:32',
            ),
        ));
        
        
    }
}
