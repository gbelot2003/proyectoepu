<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call('RolesTableSeeder');
        $this->call('InstitutionsTableSeeder');
        $this->call('CountriesTableSeeder');
        $this->call('TypeofrightsTableSeeder');
        $this->call('RightsTableSeeder');
        $this->call('RecomendationsTableSeeder');
        $this->call('InstitutionRecomendationTableSeeder');
        $this->call('UsersTableSeeder');
        $this->call('RecomendationRightTableSeeder');
        $this->call('OrganizacionsTableSeeder');
        $this->call('RoleUserTableSeeder');
        $this->call('CalificacionsTableSeeder');
    }
}
