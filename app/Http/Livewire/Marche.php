<?php

namespace App\Http\Livewire;

use App\Models\Joueur;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Marche extends Component
{
    public function render()
    {
        $clubuser = Auth::user()->clubUser;
        $joueurs = Joueur::where('enVente', '1')
        ->get();

        return view('livewire.marche',compact('clubuser','joueurs'));
    }
}
