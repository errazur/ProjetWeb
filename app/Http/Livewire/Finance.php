<?php

namespace App\Http\Livewire;

use App\Models\depense;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Finance extends Component
{

    public function render()
    {

        $clubuser = Auth::user()->clubUser;

        $depense_club = depense::where('club_id', $clubuser->id)->first();

        return view('livewire.finance', compact('clubuser', 'depense_club'));
    }
}
