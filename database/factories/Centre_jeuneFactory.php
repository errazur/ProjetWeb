<?php

namespace Database\Factories;

use App\Models\Centre_jeune;
use Illuminate\Database\Eloquent\Factories\Factory;

class Centre_jeuneFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Centre_jeune::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
        ];
    }

    public function niveau(String $niv){

        if ($niv === '0') {
            return $this->state(function (array $attributes) {
                return [
                    'niveau' => 0,
                    'place_dispo' => 0,
                    'prix_amelioriation' => 30,
                ];
            });
        };

        if ($niv === '1') {
            return $this->state(function (array $attributes) {
                return [
                    'niveau' => 1,
                    'place_dispo' => 1,
                    'prix_amelioriation' => 50,
                ];
            });
        };

        if ($niv === '2') {
            return $this->state(function (array $attributes) {
                return [
                    'niveau' => 2,
                    'place_dispo' => 2,
                    'prix_amelioriation' => 70,
                ];
            });
        };

        if ($niv === '3') {
            return $this->state(function (array $attributes) {
                return [
                    'niveau' => 3,
                    'place_dispo' => 3,
                    'prix_amelioriation' => 100,
                ];
            });
        };

        if ($niv === '4') {
            return $this->state(function (array $attributes) {
                return [
                    'niveau' => 4,
                    'place_dispo' => 4,
                    'prix_amelioriation' => 120,
                ];
            });
        };
    }
}
