<?php

namespace App\Http\Livewire;

use App\Models\Joueur;
use Livewire\Component;

class Tactique extends Component
{

    public $clubuser;
    public $joueurs;

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
        return view('livewire.tactique');
    }
}
