<?php

namespace App\Http\Livewire;

use App\Models\Club;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Parc extends Component
{

    public $clubuser;
    public $stade;
    public $centre_entrainement;
    public $centre_jeune;

    public function constructTime(){

        $clubuser = $this->clubuser;
        $stadeLevel = $clubuser->stade_id;
        $nowDate = new \DateTime;


        if($stadeLevel == '1'){


        }   elseif($stadeLevel == '2'){


        }   elseif($stadeLevel == '3'){


        }   elseif($stadeLevel == '4'){


        }

    }

    public function upgraderStade(){
        $clubuser = $this->clubuser;
        $argentClub = $clubuser->Argent;
        $stadeLevel = $clubuser->stade_id;

        if($clubuser->Argent >= $this->stade->prix_amelioriation){
            Club::where('id', Auth::id())
            ->update([  'Argent' => $argentClub - $this->stade->prix_amelioriation,
                        'stade_id' => $stadeLevel + 1
                    ]);
        }   else {
                $this->emit('flash', 'Tu n\'a pas l\'argent ncessaire pour faire l\'amélioration du stade.', 'error');
        }
    }

    public function upgraderEntrainement(){
        $clubuser = $this->clubuser;
        $argentClub = $clubuser->Argent;
        $entrainementLevel = $clubuser->centre_entrainement_id;

        if($clubuser->Argent >= $this->centre_entrainement->prix_amelioriation){
            Club::where('id', Auth::id())
            ->update([  'Argent' => $argentClub - $this->centre_entrainement->prix_amelioriation,
                        'centre_entrainement_id' => $entrainementLevel + 1
                    ]);
        }   else{
                $this->emit('flash', 'Tu n\'a pas l\'argent ncessaire pour faire l\'amélioration du centre d\'entrainement.', 'error');
        }
    }

    public function upgraderJeune(){
        $clubuser = $this->clubuser;
        $argentClub = $clubuser->Argent;
        $centrejeuneLevel = $clubuser->centre_jeune_id;

        if($clubuser->Argent >= $this->centre_jeune->prix_amelioriation){
            Club::where('id', Auth::id())
            ->update([  'Argent' => $argentClub - $this->centre_jeune->prix_amelioriation,
                        'centre_jeune_id' => $centrejeuneLevel + 1
                    ]);
        }   else{
                $this->emit('flash', 'Tu n\'a pas l\'argent ncessaire pour faire l\'amélioration du centre de jeune.', 'error');
        }
    }

    public function render()
    {
        return view('livewire.parc');
    }

}
