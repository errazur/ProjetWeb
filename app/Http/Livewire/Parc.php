<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Parc extends Component
{

    public $clubuser;
    public $stade;
    public $centre_entrainement;
    public $centre_jeune;

    public function upgraderStade(){

        if($this->clubuser->Argent >= $this->stade->prix_amelioriation){
            dd($this->clubuser);
        }   else {
                $this->emit('flash', 'tu n\'a pas l\'argent ncessaire pour faire l\'amélioration du stade', 'error');
        }
    }

    public function upgraderEntrainement(){

        if($this->clubuser->Argent >= $this->centre_entrainement->prix_amelioriation){
            dd($this->clubuser);
        }   else{
                $this->emit('flash', 'tu n\'a pas l\'argent ncessaire pour faire l\'amélioration du centre d\'entrainement', 'error');
        }
    }

    public function upgraderJeune(){

        if($this->clubuser->Argent >= $this->centre_jeune->prix_amelioriation){
            dd($this->clubuser);
        }   else{
                $this->emit('flash', 'tu n\'a pas l\'argent ncessaire pour faire l\'amélioration du centre de jeune', 'error');
        }
    }

    public function render()
    {
        return view('livewire.parc');
    }

}
