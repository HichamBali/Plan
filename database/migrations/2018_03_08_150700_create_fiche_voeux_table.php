<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFicheVoeuxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ficheVoeux', function (Blueprint $table) {
            $table->increments('idFicheVoeux');
            $table->integer('idEtudiant');
            $table->foreign('idEtudiant')
                  ->references('idEtudiant')->on('etudiants')
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
        Schema::dropIfExists('ficheVoeux');
    }
}
