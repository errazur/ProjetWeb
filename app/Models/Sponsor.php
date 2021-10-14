<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    use HasFactory;




    //Les sponsor le sont sur plusieurs Clubs
    function ClubSponsor(){
        return $this->BelongsTo(Clubs::class);
    }
}
