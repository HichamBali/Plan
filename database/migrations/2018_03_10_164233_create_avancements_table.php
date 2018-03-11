<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvancementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avancements', function (Blueprint $table) {
            $table->increments('idAvancement');
            $table->integer('idBinome');
            $table->integer('idTheme');
            $table->float('tauxAvancement');
            $table->foreign('idBinome')
                  ->references('idBinome')->on('binomes')
                  ->onDelete('cascade');
            $table->foreign('idTheme')
                  ->references('idTheme')->on('Themes');
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
        Schema::dropIfExists('avancements');
    }
}
