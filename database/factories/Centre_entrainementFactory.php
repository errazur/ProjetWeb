<?php

namespace Database\Factories;

use App\Models\centre_entrainement;
use Illuminate\Database\Eloquent\Factories\Factory;

class Centre_entrainementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = centre_entrainement::class;

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

        if ($niv === '1') {
            return $this->state(function (array $attributes) {
                return [
                    'niveau' => 1,
                    'bonus_forme' => 3,
                    'endurance_gagne' => 5,
                    'prix_amelioriation' => 40,
                ];
            });
        };

        if ($niv === '2') {
            return $this->state(function (array $attributes) {
                return [
                    'niveau' => 2,
                    'bonus_forme' => 5,
                    'endurance_gagne' => 7,
                    'prix_amelioriation' => 80,
                ];
            });
        };

        if ($niv === '3') {
            return $this->state(function (array $attributes) {
                return [
                    'niveau' => 3,
                    'bonus_forme' => 7,
                    'endurance_gagne' => 9,
                    'prix_amelioriation' => 110,
                ];
            });
        };
    }
}
