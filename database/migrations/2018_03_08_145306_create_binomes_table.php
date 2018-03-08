<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBinomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('binomes', function (Blueprint $table) {
            $table->increments('idBinome');
            $table->foreign('idEtudiant1')
                  ->references('idEtudiant')->on('etudiants')
                  ->onDelete('cascade')
                  ->notNullValue();
            $table->foreign('idEtudiant2')
                  ->references('idEtudiant')->on('etudiants')
                  ->onDelete('cascade')
                  ->notNullValue();
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
        Schema::dropIfExists('binomes');
    }
}
