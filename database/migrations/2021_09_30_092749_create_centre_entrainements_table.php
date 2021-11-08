<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCentreEntrainementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centre_entrainements', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('niveau');
            $table->bigInteger('bonus_forme');
            $table->bigInteger('endurance_gagne');
            $table->bigInteger('prix_amelioriation')->nullable();
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
        Schema::dropIfExists('centre_entrainements');
    }
}
