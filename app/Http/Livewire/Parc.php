<?php

namespace App\Http\Livewire;

use App\Models\Club;
use App\Models\Stade;
use Livewire\Component;
use App\Models\Centre_jeune;
use App\Models\Centre_entrainement;
use Illuminate\Support\Facades\Auth;

class Parc extends Component
{

    public function upgraderStade()
    {
        $clubuser = Auth::user()->clubUser;
        $stade = Stade::where('id', $clubuser->stade_id)->first();
        $argentClub = $clubuser->Argent;
        $stadeLevel = $clubuser->stade_id;

        if ($clubuser->constructionOn == '0') {

            if ($clubuser->Argent >= $stade->prix_amelioriation) {

                $nowDate = new \DateTime;

                if ($stadeLevel == '1') {

                    $finishDate = $nowDate->add(new \DateInterval('P1M'));
                    Club::where('id', Auth::id())
                        ->update([
                            'constructionOn' => '1',
                            'constructionName' => 'stade',
                            'constructionDate' => $finishDate,
                            'Argent' => $argentClub - $stade->prix_amelioriation,
                        ]);
                } elseif ($stadeLevel == '2') {

                    $finishDate = $nowDate->add(new \DateInterval('P3M'));
                    Club::where('id', Auth::id())
                        ->update([
                            'constructionOn' => '1',
                            'constructionName' => 'stade',
                            'constructionDate' => $finishDate,
                            'Argent' => $argentClub - $stade->prix_amelioriation,
                        ]);
                } elseif ($stadeLevel == '3') {

                    $finishDate = $nowDate->add(new \DateInterval('P5M'));
                    Club::where('id', Auth::id())
                        ->update([
                            'constructionOn' => '1',
                            'constructionName' => 'stade',
                            'constructionDate' => $finishDate,
                            'Argent' => $argentClub - $stade->prix_amelioriation,
                        ]);
                } elseif ($stadeLevel == '4') {

                    $finishDate = $nowDate->add(new \DateInterval('P9M'));
                    Club::where('id', Auth::id())
                        ->update([
                            'constructionOn' => '1',
                            'constructionName' => 'stade',
                            'constructionDate' => $finishDate,
                            'Argent' => $argentClub - $stade->prix_amelioriation,
                        ]);
                }

                return redirect('/Structure');
            } else {
                $this->emit('flash', 'Tu n\'a pas l\'argent ncessaire pour faire l\'amélioration du stade.', 'error');
            }
        } else {
            $this->emit('flash', 'Tu a déjà une amélioration en cours. ', 'info');
        }
    }

    public function upgraderEntrainement()
    {
        $clubuser = Auth::user()->clubUser;
        $centre_entrainement = Centre_entrainement::where('id', $clubuser->centre_entrainement_id)->first();
        $argentClub = $clubuser->Argent;
        $entrainementLevel = $clubuser->centre_entrainement_id;

        if ($clubuser->constructionOn == '0') {

            if ($clubuser->Argent >= $centre_entrainement->prix_amelioriation) {

                $nowDate = new \DateTime;

                if ($entrainementLevel == '1') {

                    $finishDate = $nowDate->add(new \DateInterval('PT1M'));
                    Club::where('id', Auth::id())
                        ->update([
                            'constructionOn' => '1',
                            'constructionName' => 'centre_entrainement',
                            'constructionDate' => $finishDate,
                            'Argent' => $argentClub - $centre_entrainement->prix_amelioriation,
                        ]);
                } elseif ($entrainementLevel == '2') {

                    $finishDate = $nowDate->add(new \DateInterval('PT1M'));
                    Club::where('id', Auth::id())
                        ->update([
                            'constructionOn' => '1',
                            'constructionName' => 'centre_entrainement',
                            'constructionDate' => $finishDate,
                            'Argent' => $argentClub - $centre_entrainement->prix_amelioriation,
                        ]);
                } elseif ($entrainementLevel == '3') {

                    $finishDate = $nowDate->add(new \DateInterval('P5M'));
                    Club::where('id', Auth::id())
                        ->update([
                            'constructionOn' => '1',
                            'constructionName' => 'centre_entrainement',
                            'constructionDate' => $finishDate,
                            'Argent' => $argentClub - $centre_entrainement->prix_amelioriation,
                        ]);
                } elseif ($entrainementLevel == '4') {

                    $finishDate = $nowDate->add(new \DateInterval('P9M'));
                    Club::where('id', Auth::id())
                        ->update([
                            'constructionOn' => '1',
                            'constructionName' => 'centre_entrainement',
                            'constructionDate' => $finishDate,
                            'Argent' => $argentClub - $centre_entrainement->prix_amelioriation,
                        ]);
                }

                return redirect('/Structure');
            } else {
                $this->emit('flash', 'Tu n\'a pas l\'argent ncessaire pour faire l\'amélioration du centre d\'entrainement.', 'error');
            }
        } else {
            $this->emit('flash', 'Tu a déjà une amélioration en cours. ', 'info');
        }
    }

    public function upgraderJeune()
    {
        $clubuser = Auth::user()->clubUser;
        $centre_jeune = Centre_jeune::where('id', $clubuser->centre_jeune_id)->first();
        $argentClub = $clubuser->Argent;
        $centrejeuneLevel = $clubuser->centre_jeune_id;

        if ($clubuser->constructionOn == '0') {

            if ($clubuser->Argent >= $centre_jeune->prix_amelioriation) {

                $nowDate = new \DateTime;

                if ($centrejeuneLevel == '1') {

                    $finishDate = $nowDate->add(new \DateInterval('PT1M'));
                    Club::where('id', Auth::id())
                        ->update([
                            'constructionOn' => '1',
                            'constructionName' => 'centre_jeune',
                            'constructionDate' => $finishDate,
                            'Argent' => $argentClub - $centre_jeune->prix_amelioriation,
                        ]);
                } elseif ($centrejeuneLevel == '2') {

                    $finishDate = $nowDate->add(new \DateInterval('PT1M'));
                    Club::where('id', Auth::id())
                        ->update([
                            'constructionOn' => '1',
                            'constructionName' => 'centre_jeune',
                            'constructionDate' => $finishDate,
                            'Argent' => $argentClub - $centre_jeune->prix_amelioriation,
                        ]);
                } elseif ($centrejeuneLevel == '3') {

                    $finishDate = $nowDate->add(new \DateInterval('P5M'));
                    Club::where('id', Auth::id())
                        ->update([
                            'constructionOn' => '1',
                            'constructionName' => 'centre_jeune',
                            'constructionDate' => $finishDate,
                            'Argent' => $argentClub - $centre_jeune->prix_amelioriation,
                        ]);
                } elseif ($centrejeuneLevel == '4') {

                    $finishDate = $nowDate->add(new \DateInterval('P9M'));
                    Club::where('id', Auth::id())
                        ->update([
                            'constructionOn' => '1',
                            'constructionName' => 'centre_jeune',
                            'constructionDate' => $finishDate,
                            'Argent' => $argentClub - $centre_jeune->prix_amelioriation,
                        ]);
                }

                return redirect('/Structure');
            } else {
                $this->emit('flash', 'Tu n\'a pas l\'argent ncessaire pour faire l\'amélioration du centre de jeune.', 'error');
            }
        } else {
            $this->emit('flash', 'Tu a déjà une amélioration en cours. ', 'info');
        }
    }

    public function render()
    {
        $clubuser = Auth::user()->clubUser;
        $stade = Stade::where('id', $clubuser->stade_id)->first();
        $centre_entrainement = Centre_entrainement::where('id', $clubuser->centre_entrainement_id)->first();
        $centre_jeune = Centre_jeune::where('id', $clubuser->centre_jeune_id)->first();

        return view('livewire.parc', compact('clubuser','stade','centre_entrainement','centre_jeune'));
    }
}
