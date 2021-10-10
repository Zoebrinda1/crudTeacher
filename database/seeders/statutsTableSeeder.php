<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class statutsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("statuts")->insert([
            ["libelle"=>"vacataire"],
            ["libelle"=>"permanant"],
            
        ]);
    }
}
