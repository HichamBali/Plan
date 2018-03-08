<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSoutenancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soutenances', function (Blueprint $table) {
            $table->increments('idSoutenance');
            $table->dateTime('tempsSoutenance');
            $table->integer('idBinome');
            $table->integer('idSalle');
            $table->integer('jury');
            $table->foreign('idBinome')
                  ->references('idBinome')->on('binomes');
            $table->foreign('idSalle')
                  ->references('idSalle')->on('salles');
            $table->foreign('jury')
                  ->references('idJury')->on('jurys');
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
        Schema::dropIfExists('soutenances');
    }
}
