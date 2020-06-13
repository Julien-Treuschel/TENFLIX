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
        Schema::create('video', function (Blueprint $table) {
			$table->engine = 'InnoDB';
            $table->increments('idVideo')->unsigned();
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
        Schema::drop('video');
    }
}
