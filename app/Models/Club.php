<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;
    protected $fillable = ['nom','initial','nom_stade','user_id','stade_id','centre_entrainement_id','centre_jeune_id'];

    // Appartenance du Club à un User
    function user(){
        return $this->belongsTo(User::class);
    }

    // Le Club peut avoirs plusieurs joueur
    function joueur(){
        return $this->hasMany(Joueur::class);
    }

    // Le Club n'a que un stade
    function stade(){
        return $this->hasOne(Stade::class);
    }

    // Le Club n'a que un Centre d'entrainement
    function centre_entrainement(){
        return $this->hasOne(Centre_entrainement::class);
    }

    // Le Club n'a que un Centre des jeunes
    function centre_jeune(){
        return $this->hasOne(Centre_jeune::class);
    }

    // Le Club n'a que un Sponsor
    function sponsor(){
        return $this->hasOne(Sponsor::class);
    }

    // Le Club à plusieurs match
    function matchClub(){
        return $this->hasMany(Match::class);
    }


}


