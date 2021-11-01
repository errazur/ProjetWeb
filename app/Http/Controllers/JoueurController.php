<?php

namespace App\Http\Controllers;

use App\Models\Joueur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JoueurController extends Controller
{
    public function joueurAction(Joueur $joueur){
        $clubuser = Auth::user()->clubUser;
        return view('joueur',compact('clubuser','joueur'));

     }
}
