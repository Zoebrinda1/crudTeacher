<?php

namespace Database\Seeders;

use App\Models\Enseignant;
use Illuminate\Database\Seeder;
//use Database\Seeders\statutsTableSeeder;
use Database\Factories\EnseignantFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         //\App\Models\User::factory(10)->create();
            
        Enseignant::factory(35)->create();

        //$this->call(statutsTableSeeder::class);
    }
}
