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
            $table->bigInteger('Points')->default(0);
            $table->foreignId('user_id')->constrained();
            $table->enum('Ligue', ['Bronze', 'Argent', 'Or'])->default('Bronze');
            $table->enum('tactique',['défensif','equilibré','offensif'])->default('equilibré');
            $table->enum('dispositif',['4-4-2','4-3-3','4-5-1'])->default('4-4-2');
            $table->dateTime('constructionDate')->nullable();
            $table->boolean('constructionOn')->default('0');
            $table->string('constructionName',40)->nullable();
            $table->foreignId('stade_id')->default(1)->constrained();
            $table->foreignId('centre_entrainement_id')->default(1)->constrained();
            $table->foreignId('centre_jeune_id')->default(1)->constrained();
            $table->foreignId('sponsor_id')->nullable()->constrained();
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
