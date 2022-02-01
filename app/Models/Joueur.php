<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joueur extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'age',
        'poste',
        'vitesse',
        'dribble',
        'tir',
        'passe',
        'defense',
        'physique',
        'forme',
        'energie',
        'prix',
        'enVente',
    ];


    // Les joueurs sont à un Club
    function joueurClub(){
        return $this->belongsTo(CLub::class);
    }

    //Les joueurs effectues des entrainements
    function entrainementJoueur(){
        return $this->hasMany(Entrainement::class);
    }

}
