<?php

namespace App\Models;

use App\Models\Club;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class depense extends Model
{
    use HasFactory;

    protected $fillable = ['depense','description','mois2','mois3','club_id'];


    function depense_club(){
        return $this->belongsTo(Club::class);
    }
}
