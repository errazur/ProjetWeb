<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Parc extends Component
{

    public $clubuser;
    public $stade;
    public $centre_entrainement;
    public $centre_jeune;

    public function render()
    {
        return view('livewire.parc');
    }
}
