<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centre_jeune extends Model
{
    use HasFactory;




    //Le centre des jeunes appartient au club
    function centre_jeune_club(){
        return $this->belongsTo(Club::class);
    }
}
