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
        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(InstitutionsTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(TypeofrightsTableSeeder::class);
        $this->call(TypeofrecomendationsTableSeeder::class);
        $this->call(RecomendationsTableSeeder::class);
        $this->call(OrganizacionsTableSeeder::class);
        $this->call(RightsTableSeeder::class);
        $this->call(RecomendationRightTableSeeder::class);
        //$this->call(InstitutionRecomendationTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);
        //$this->call(CalificacionsTableSeeder::class);
        $this->call('UsersTableSeeder');
    }
}
