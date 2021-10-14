<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    use HasFactory;




    // des Clubs peuvent faire plusieurs match
    function matchClub(){
        return $this->belongsTo(Club::class);
    }
}
