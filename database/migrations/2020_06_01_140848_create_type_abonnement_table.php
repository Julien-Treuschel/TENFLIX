<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeAbonnementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_abonnement', function (Blueprint $table) {
            $table->increments('IdTypeAbonnement');
            $table->string('typeAbonnement');
            $table->integer('dureeAbonnement');
            $table->integer('nbJourEssai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('type_abonnement');
    }
}
