<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePokemonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokemons', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('energy')->unsigned();
            $table->foreign('energy')
                ->references('id')
                ->on('energies')
                ->onDelete('cascade');
            $table->integer('level');
            $table->integer('hp');
            $table->integer('attack');
            $table->integer('special_defense');
            $table->integer('special_attack');
            $table->string('image');
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
        Schema::dropIfExists('pokemons');
    }
}
