<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbonnementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abonnement', function (Blueprint $table) {
			$table->engine = 'InnoDB';
            $table->increments('IdAbonnement');
            $table->dateTime('dateDebutAbonnement');
            $table->dateTime('dateFinAbonnement');
            $table->boolean('boolEstAbo');
            $table->string('urlImage');
            $table->float('prix');
        });

        Schema::table('abonnement', function ($table) {
            $table->integer('idTypeAbonnement')->unsigned();
            $table->integer('idUtilisateur')->unsigned();
            $table->foreign('idTypeAbonnement')->references('idTypeAbonnement')->on('type_abonnement');
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
        Schema::drop('abonnement');
    }
}
