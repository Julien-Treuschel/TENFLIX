<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategorieVideoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorieVideo', function (Blueprint $table) {
            $table->increments('idCategorieVideo');
        });

        Schema::table('categorieVideo', function ($table) {
            $table->integer('idVideo')->unsigned();
            $table->integer('idCategorie')->unsigned();
            $table->foreign('idVideo')->references('idVideo')->on('videos');
            $table->foreign('idCategorie')->references('idCategorie')->on('categorie');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('categorieVideo');
    }
}
