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
        Schema::create('categorievideo', function (Blueprint $table) {
			$table->engine = 'InnoDB';
            $table->increments('idCategorievideo');
        });

        Schema::table('categorievideo', function ($table) {
            $table->integer('idVideo')->unsigned();
            $table->integer('idCategorie')->unsigned();
            $table->foreign('idVideo')->references('idVideo')->on('video');
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
        Schema::drop('categorievideo');
    }
}
