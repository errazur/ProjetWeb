<?php

namespace Database\Factories;

use App\Models\Joueur;
use Illuminate\Database\Eloquent\Factories\Factory;

class JoueurFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Joueur::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'nom' => $this->faker->lastName(),
            'prenom' => $this->faker->firstName(),
            'age' => random_int(18, 28),
            'forme' => 10,
            'energie' => 100,


        ];
    }

    public function postes(String $role)
    {

        if ($role === 'GC') {
            return $this->state(function (array $attributes) {
                return [
                    'poste' => 'GC',
                    'vitesse' => random_int(20, 40),
                    'dribble' => random_int(10, 20),
                    'tir' => random_int(10, 30),
                    'passe' => random_int(40, 60),
                    'physique' => random_int(50, 80),
                    'club_id' => 0,
                    'defense' => random_int(50, 80),
                ];
            });
        };

        if($role === 'DG'){
            return $this->state(function (array $attributes) {
                return [
                    'poste' => 'DG',
                    'dribble' => random_int(30, 50),
                    'passe' => random_int(40, 60),
                    'physique' => random_int(50, 70),
                    'defense' => random_int(40, 80),
                    'tir' => random_int(30, 40),
                    'vitesse' => random_int(50, 70),
                    'club_id' => 0,
                ];
            });
        };

        if($role === 'DD'){
            return $this->state(function (array $attributes) {
                return [
                    'poste' => 'DD',
                    'dribble' => random_int(30, 50),
                    'passe' => random_int(40, 60),
                    'physique' => random_int(50, 70),
                    'defense' => random_int(40, 80),
                    'tir' => random_int(30, 40),
                    'vitesse' => random_int(50, 70),
                    'club_id' => 0,
                ];
            });
        };

        if ($role === 'DC'){
            return $this->state(function (array $attributes) {
                return [
                    'poste' => 'DC',
                    'dribble' => random_int(20, 40),
                    'passe' => random_int(50, 60),
                    'physique' => random_int(50, 70),
                    'defense' => random_int(40, 80),
                    'tir' => random_int(20, 30),
                    'vitesse' => random_int(40, 60),
                    'club_id' => 0,
                ];
            });
        };

        if ($role === 'MG'){
            return $this->state(function (array $attributes) {
                return [
                    'poste' => 'MG',
                    'vitesse' => random_int(60, 90),
                    'dribble' => random_int(60, 80),
                    'tir' => random_int(60, 80),
                    'passe' => random_int(50, 70),
                    'physique' => random_int(40, 60),
                    'club_id' => 0,
                    'defense' => random_int(20, 50),
                ];
            });
        };

        if ($role === 'MD'){
            return $this->state(function (array $attributes) {
                return [
                    'poste' => 'MD',
                    'vitesse' => random_int(60, 90),
                    'dribble' => random_int(60, 80),
                    'tir' => random_int(60, 80),
                    'passe' => random_int(50, 70),
                    'physique' => random_int(40, 60),
                    'club_id' => 0,
                    'defense' => random_int(20, 50),
                ];
            });
        };

        if ($role === 'MC'){
            return $this->state(function (array $attributes) {
                return [
                    'poste' => 'MC',
                    'vitesse' => random_int(50, 60),
                    'dribble' => random_int(50, 60),
                    'tir' => random_int(50, 60),
                    'passe' => random_int(70, 80),
                    'physique' => random_int(50, 60),
                    'club_id' => 0,
                    'defense' => random_int(40, 59),
                ];
            });
        };

        if ($role === 'BU'){
            return $this->state(function (array $attributes) {
                return [
                    'poste' => 'BU',
                    'vitesse' => random_int(60, 70),
                    'dribble' => random_int(50, 60),
                    'tir' => random_int(60, 80),
                    'passe' => random_int(60, 70),
                    'physique' => random_int(50, 70),
                    'club_id' => 0,
                    'defense' => random_int(20, 40),
                ];
            });
        };

    }

}
