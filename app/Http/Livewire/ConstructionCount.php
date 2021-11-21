<?php

namespace App\Http\Livewire;

use App\Models\Club;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ConstructionCount extends Component
{

    public $clubuser;
    public $dateDiff;

    public function countDate()
    {

        $clubuser = $this->clubuser;
        $stadeLevel = $clubuser->stade_id;
        $entrainementLevel = $clubuser->centre_entrainement_id;
        $centrejeuneLevel = $clubuser->centre_jeune_id;
        $nowDate = now()->format('Y-m-d H:i:s');
        $this->dateDiff = now()->diff($clubuser->constructionDate)->format('%y ans , %m mois , %d jours , %h heures , %i minutes , %s secondes');

        if ($nowDate >= $clubuser->constructionDate) {

            if ($clubuser->constructionName === 'stade') {
                Club::where('id', Auth::id())
                    ->update([
                        'constructionOn' => '0',
                        'stade_id' => $stadeLevel + 1,
                        'constructionName' => 'null'
                    ]);
            } elseif ($clubuser->constructionName === 'centre_entrainement') {
                Club::where('id', Auth::id())
                    ->update([
                        'constructionOn' => '0',
                        'centre_entrainement_id' => $entrainementLevel + 1,
                        'constructionName' => 'null'
                    ]);
            } elseif ($clubuser->constructionName === 'centre_jeune') {
                Club::where('id', Auth::id())
                    ->update([
                        'constructionOn' => '0',
                        'centre_jeune_id' => $centrejeuneLevel + 1,
                        'constructionName' => 'null'
                    ]);
            }

            return redirect('/Structure');
        } else {
            return $this->dateDiff;
        }
    }

    public function render()
    {
        return view('livewire.construction-count');
    }
}
