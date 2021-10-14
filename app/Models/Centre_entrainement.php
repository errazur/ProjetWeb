<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centre_entrainement extends Model
{
    use HasFactory;



    //Le centre d'entrainement est au Club
    function centre_entrainement_Club(){
        return $this->belongsTo(Clubs::class);
    }
}
