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

    public function vente(Joueur $joueur){
        $clubuser = Auth::user()->clubUser;

        $data = request()->validate([
            'prix' => 'required',
        ]);

        $myJoueur = Joueur::where('id', $joueur->id)->update([
            'enVente' => '1',
            'prix' => $data['prix'],
        ]);

        return redirect('/Transfert');
    }
}
