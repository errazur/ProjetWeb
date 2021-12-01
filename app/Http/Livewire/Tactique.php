<?php

namespace App\Http\Livewire;

use App\Models\Joueur;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Tactique extends Component
{

    public $poste = ['','GC', 'DG','DC','DC', 'DD','MG','MC','MC', 'MD', 'BU','BU', 'REM1','REM2','REM3','REM4'];

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
        return view('livewire.tactique', compact('clubuser','joueurs'));
    }
}
