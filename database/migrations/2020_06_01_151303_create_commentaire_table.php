<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentaireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentaire', function (Blueprint $table) {
            $table->increments('idCommentaire');
            $table->string('commentaire');   
        });

        Schema::table('commentaire', function ($table) {
            $table->integer('idVideo')->unsigned();
            $table->integer('idUtilisateur')->unsigned();
            $table->foreign('idVideo')->references('idVideo')->on('videos');
            $table->foreign('idUtilisateur')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('commentaire');
    }
}
