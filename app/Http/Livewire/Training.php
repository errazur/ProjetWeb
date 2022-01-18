<?php

namespace App\Http\Livewire;

use App\Models\Joueur;
use Livewire\Component;
use App\Models\Centre_entrainement;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class Training extends Component
{

    public function render()
    {

        $clubuser = Auth::user()->clubUser;
        $joueurs = $clubuser->joueurs;
        $centre_entrainement = Centre_entrainement::where('id', $clubuser->centre_entrainement_id)->first();

        return view('livewire.training', compact('joueurs', 'clubuser', 'centre_entrainement'));
    }

    public function entrainementLaunch()
    {
        $clubuser = Auth::user()->clubUser;

        $data = request()->validate([
            'trainingType' => 'min:1',
            'joueur' => 'min:1'
        ]);

        if($data == []){

            $this->emit('flash', 'Tu dois selectionner un type et au moins un joueur avant de lancer l\'entrainement', 'info');
            return back();

        }

        $joueurs = Joueur::findMany($data['joueur']);
        $trainingType = $data['trainingType'];

        foreach ($joueurs as $joueur) {

            $endurance_joueur = $joueur->energie;
            $forme_joueur = $joueur->forme;
            $trainingUpgrade = $joueur->$trainingType;

            Joueur::where('id', $joueur->id)
                ->update([
                    'energie' => $endurance_joueur - 20,
                    'forme' => $forme_joueur + 7
                ]);
            if($joueur->forme > 80){
                Joueur::where('id', $joueur->id)
                ->update([
                    $trainingUpgrade++
                ]);
            };

        };

        return redirect('/Entrainement');
    }
}
