<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Dispositif extends Component
{

    public $clubuser;
    public $joueurs;

    public function reorder($orderIds){

        dd($orderIds);

    }

    public function render()
    {
        return view('livewire.dispositif');
    }
}
