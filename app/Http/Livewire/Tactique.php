<?php

namespace App\Http\Livewire;

use App\Models\Joueur;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Tactique extends Component
{

    public $poste = ['','GC', 'DD','DC','DC', 'DG','MD','MC','MC', 'MG', 'BU','BU', 'REM1','REM2','REM3','REM4'];

    public function updateJoueurOrder($items)
    {

        foreach ($items as $item) {

            Joueur::where('id', $item['value'])
                ->update([
                    'order_position' => $item['order']
                ]);
        }
    }

    public function render()
    {
        $clubuser = Auth::user()->clubUser;
        $joueurs = Joueur::where('club_id', $clubuser->id)->orderBy('order_position', 'asc')->get();

        $joueur1 = Joueur::where('club_id', $clubuser->id)->where('order_position',1)->first();
        $joueur2 = Joueur::where('club_id', $clubuser->id)->where('order_position',2)->first();
        $joueur3 = Joueur::where('club_id', $clubuser->id)->where('order_position',3)->first();
        $joueur4 = Joueur::where('club_id', $clubuser->id)->where('order_position',4)->first();
        $joueur5 = Joueur::where('club_id', $clubuser->id)->where('order_position',5)->first();
        $joueur6 = Joueur::where('club_id', $clubuser->id)->where('order_position',6)->first();
        $joueur7 = Joueur::where('club_id', $clubuser->id)->where('order_position',7)->first();
        $joueur8 = Joueur::where('club_id', $clubuser->id)->where('order_position',8)->first();
        $joueur9 = Joueur::where('club_id', $clubuser->id)->where('order_position',9)->first();
        $joueur10 = Joueur::where('club_id', $clubuser->id)->where('order_position',10)->first();
        $joueur11 = Joueur::where('club_id', $clubuser->id)->where('order_position',11)->first();

        return view('livewire.tactique', compact('clubuser','joueurs','joueur1','joueur2','joueur3','joueur4','joueur5','joueur6','joueur7','joueur8','joueur9','joueur10','joueur11'));
    }
}
