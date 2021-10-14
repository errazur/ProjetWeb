<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clubs', function (Blueprint $table) {
            $table->id();
            $table->String('nom',40);
            $table->String('initial',4);
            $table->String('nom_stade',40);
            $table->bigInteger('Argent')->default(50);
            $table->bigInteger('Points');
            $table->foreignId('user_id')->constrained();
            $table->enum('Ligue', ['Bronze', 'Argent', 'Or'])->default('Bronze');
            $table->foreignId('stade_id')->constrained();
            $table->foreignId('centre_entrainement_id')->constrained();
            $table->foreignId('centre_jeune_id')->constrained();
            $table->foreignId('sponsor_id')->constrained()->nullable();
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
        Schema::dropIfExists('clubs');
    }
}
