<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stade extends Model
{
    use HasFactory;



    // Le stade est au Club
    function stade_Club(){
        return $this->belongsTo(Clubs::class);
    }
}
