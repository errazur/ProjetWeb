<?php

namespace App\Http\Livewire;

use App\Models\Club;
use App\Models\Joueur;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Dispositif extends Component
{

    public function render()
    {

        $clubuser = Club::where('user_id', Auth::id())->first();
        $joueurs = Joueur::where('club_id', $clubuser->id)->orderBy('order_position', 'asc')->get();

        return view('livewire.dispositif',compact('clubuser','joueurs'));
    }
}
