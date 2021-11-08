<?php

namespace Database\Factories;

use App\Models\Stade;
use Illuminate\Database\Eloquent\Factories\Factory;

class StadeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Stade::class;

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
                    'place_dispo' => 10000,
                    'prix_place' => 15,
                    'prix_amelioriation' => 30,
                ];
            });
        };

        if ($niv === '2') {
            return $this->state(function (array $attributes) {
                return [
                    'niveau' => 2,
                    'place_dispo' => 15000,
                    'prix_place' => 15,
                    'prix_amelioriation' => 60,
                ];
            });
        };

        if ($niv === '3') {
            return $this->state(function (array $attributes) {
                return [
                    'niveau' => 3,
                    'place_dispo' => 20000,
                    'prix_place' => 15,
                    'prix_amelioriation' => 90,
                ];
            });
        };
    }
}
