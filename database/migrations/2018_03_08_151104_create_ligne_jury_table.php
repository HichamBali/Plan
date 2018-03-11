<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLigneJuryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ligneJurys', function (Blueprint $table) {
            $table->increments('idjury');
            $table->integer('idEnseignant');
            $table->foreign('idEnseignant')
                  ->references('idEnseignant')->on('enseignants')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ligneJury');
    }
}
