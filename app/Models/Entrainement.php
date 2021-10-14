<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrainement extends Model
{
    use HasFactory;




    // Les entrainements sont effectué par les joueurs et commandé par le club
    function entrainerClub(){
        return $this->hasOneThrough(Clubs::class,Joueur::class);
    }
}
