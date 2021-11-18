<?php

namespace App\Http\Livewire;

use App\Models\Joueur;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class Training extends Component
{

    public $clubuser;
    public $centre_entrainement;


    public function render()
    {
        return view('livewire.training');
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

        foreach ($joueurs as $joueur) {

            $trainingType = $data['trainingType'];

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
