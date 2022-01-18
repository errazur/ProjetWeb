<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Centre_jeune;
use Illuminate\Support\Facades\Auth;

class Young extends Component
{


    public function render()
    {

        $clubuser = Auth::user()->clubUser;
        $centre_jeune = Centre_jeune::where('id', $clubuser->centre_jeune_id)->first();

        return view('livewire.young', compact('clubuser','centre_jeune'));
    }
}
