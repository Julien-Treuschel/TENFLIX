<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAchatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('achat', function (Blueprint $table) {
			$table->engine = 'InnoDB';
            $table->increments('idAchat');
            $table->dateTime('datAchat');
            $table->boolean('boolEstGratuite');        
        });

        Schema::table('achat', function ($table) {
            $table->integer('idVideo')->unsigned();
            $table->integer('idUtilisateur')->unsigned();
            $table->foreign('idVideo')->references('idVideo')->on('video');
            $table->foreign('idUtilisateur')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('achat');
    }
}
