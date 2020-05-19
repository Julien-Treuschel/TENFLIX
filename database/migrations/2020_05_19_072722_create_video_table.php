<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->increments('idVideo');
            $table->string('themeVideo');
            $table->string('auteurVideo');
            $table->string('titreVideo');
            $table->string('descriptionVideo');
            $table->float('prixVideo');
            $table->string('urlVideo');
            $table->boolean('boolEstGratuite');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('videos');
    }
}