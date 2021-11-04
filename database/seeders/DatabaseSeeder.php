<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Création des structures du Stade dans la base de données
        \App\Models\Stade::factory(1)->niveau('1')->create();
        \App\Models\Stade::factory(1)->niveau('2')->create();
        \App\Models\Stade::factory(1)->niveau('3')->create();

        // Création des structures du centre d'entrainement dans la base de données
        \App\Models\centre_entrainement::factory(1)->niveau('1')->create();
        \App\Models\centre_entrainement::factory(1)->niveau('2')->create();
        \App\Models\centre_entrainement::factory(1)->niveau('3')->create();

        // Création des structures du centre de jeune dans la base de données
        \App\Models\centre_jeune::factory(1)->niveau('0')->create();
        \App\Models\centre_jeune::factory(1)->niveau('1')->create();
        \App\Models\centre_jeune::factory(1)->niveau('2')->create();
        \App\Models\centre_jeune::factory(1)->niveau('3')->create();
        \App\Models\centre_jeune::factory(1)->niveau('4')->create();
    }
}
