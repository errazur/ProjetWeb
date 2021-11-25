<?php

namespace App\Http\Controllers;

use App\Models\Joueur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TactiqueController extends Controller
{
    public function tactiqueAction(){
        $clubuser = Auth::user()->clubUser;
        $joueurs = Joueur::where('club_id', $clubuser->id)->orderBy('order_position', 'asc')->get();
        return view('tactics',compact('clubuser', 'joueurs'));

     }
}
