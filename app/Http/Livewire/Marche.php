<?php

namespace App\Http\Livewire;

use App\Models\Club;
use App\Models\Joueur;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Marche extends Component
{
    public $joueur;

    public function achat($joueur)
    {
        $clubuser = Club::where('user_id', Auth::id())->first();
        $clubJoueur = Club::where('id', $joueur['club_id'])->first();
        $joueurSell = Joueur::where('id', $joueur['id'])->first();

        if ($clubuser->id != $clubJoueur->id) {
            if ($clubuser->Argent >= $joueurSell->prix) {
                $data = $this->validate(['joueur' => '']);
                $data['joueur'] = $joueur;
                dd($joueurSell);

                //Joueur vendu
                Joueur::where('id', $joueurSell->id)
                    ->update([
                        'club_id' => $clubuser,
                        'order_position' => '20'
                    ]);

                //Club qui achète
                Club::where('id', $clubuser->id)->update([
                    'Argent' => $clubuser->Argent - $joueurSell->prix,
                ]);

                //Club qui vend
                Club::where('id', $clubJoueur->id)->update([
                    'Argent' => $clubJoueur + $joueurSell->prix,
                ]);
            } else {
                $this->emit('flash', 'Tu n\'a pas l\'argent necessaire pour acheter ce joueur !', 'error');
            }
        } else {
            $this->emit('flash', 'C\'est le joueur que tu a mis en vente !', 'error');
        }
    }

    public function render()
    {
        $clubuser = Auth::user()->clubUser;
        $joueurs = Joueur::where('enVente', '1')
            ->get();

        return view('livewire.marche', compact('clubuser', 'joueurs'));
    }
}
