<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTournoisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tournois', function (Blueprint $table) {
            $table->increments('id');
            $table->string('libelle')->nullable();
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->dateTime('DateDebut')->nullable();
            $table->dateTime('DateFin')->nullable();
            $table->time('HeureDebut')->nullable();
            $table->time('HeureFin')->nullable();
            $table->string('slug')->nullable();
            $table->integer('ResultatId')->nullable();
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
        Schema::dropIfExists('tournois');
    }
}
