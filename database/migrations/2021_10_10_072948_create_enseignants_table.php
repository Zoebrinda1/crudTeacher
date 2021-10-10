<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnseignantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enseignants', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("Nom");
            $table->string("Prénom");
            $table->string("Email");
            $table->string("Téléphone");
            $table->foreignId('statut_id')->constrained("statuts");
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("enseignants", function(Blueprint $table){
            $table->dropForeign("statut_id");
        });
        Schema::dropIfExists('enseignants');
    }
}


