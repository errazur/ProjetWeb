<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJoueursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('joueurs', function (Blueprint $table) {
            $table->id();
            $table->String('nom');
            $table->String('prenom');
            $table->bigInteger('age');
            $table->String('poste',4);
            $table->bigInteger('plongeon');
            $table->bigInteger('reflexe');
            $table->bigInteger('vitesse');
            $table->bigInteger('dribble');
            $table->bigInteger('tir');
            $table->bigInteger('passe');
            $table->bigInteger('defense');
            $table->bigInteger('force');
            $table->bigInteger('forme');
            $table->bigInteger('energie');
            $table->boolean('enVente')->default('0');
            $table->bigInteger('prix')->nullable();
            $table->foreignId('club_id')->constrained();
            $table->bigInteger('order_position')->default(0);
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
        Schema::dropIfExists('joueurs');
    }
}
