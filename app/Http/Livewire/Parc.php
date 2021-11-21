<?php

namespace App\Http\Livewire;

use App\Models\Club;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class Parc extends Component
{

    public $clubuser;
    public $stade;
    public $centre_entrainement;
    public $centre_jeune;
    public $diffDate;

    public function upgraderStade()
    {
        $clubuser = $this->clubuser;
        $argentClub = $clubuser->Argent;
        $stadeLevel = $clubuser->stade_id;

        if ($clubuser->constructionOn == '0') {

            if ($clubuser->Argent >= $this->stade->prix_amelioriation) {

                $nowDate = new \DateTime;

                if ($stadeLevel == '1') {

                    $finishDate = $nowDate->add(new \DateInterval('PT1M'));
                    Club::where('id', Auth::id())
                        ->update([
                            'constructionOn' => '1',
                            'constructionName' => 'stade',
                            'constructionDate' => $finishDate,
                            'Argent' => $argentClub - $this->stade->prix_amelioriation,
                        ]);
                } elseif ($stadeLevel == '2') {

                    $finishDate = $nowDate->add(new \DateInterval('PT1M'));
                    Club::where('id', Auth::id())
                        ->update([
                            'constructionOn' => '1',
                            'constructionName' => 'stade',
                            'constructionDate' => $finishDate,
                            'Argent' => $argentClub - $this->stade->prix_amelioriation,
                        ]);
                } elseif ($stadeLevel == '3') {

                    $finishDate = $nowDate->add(new \DateInterval('P5M'));
                    Club::where('id', Auth::id())
                        ->update([
                            'constructionOn' => '1',
                            'constructionName' => 'stade',
                            'constructionDate' => $finishDate,
                            'Argent' => $argentClub - $this->stade->prix_amelioriation,
                        ]);
                } elseif ($stadeLevel == '4') {

                    $finishDate = $nowDate->add(new \DateInterval('P9M'));
                    Club::where('id', Auth::id())
                        ->update([
                            'constructionOn' => '1',
                            'constructionName' => 'stade',
                            'constructionDate' => $finishDate,
                            'Argent' => $argentClub - $this->stade->prix_amelioriation,
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
        $clubuser = $this->clubuser;
        $argentClub = $clubuser->Argent;
        $entrainementLevel = $clubuser->centre_entrainement_id;

        if ($clubuser->constructionOn == '0') {

            if ($clubuser->Argent >= $this->centre_entrainement->prix_amelioriation) {

                $nowDate = new \DateTime;

                if ($entrainementLevel == '1') {

                    $finishDate = $nowDate->add(new \DateInterval('PT1M'));
                    Club::where('id', Auth::id())
                        ->update([
                            'constructionOn' => '1',
                            'constructionName' => 'centre_entrainement',
                            'constructionDate' => $finishDate,
                            'Argent' => $argentClub - $this->centre_entrainement->prix_amelioriation,
                        ]);
                } elseif ($entrainementLevel == '2') {

                    $finishDate = $nowDate->add(new \DateInterval('PT1M'));
                    Club::where('id', Auth::id())
                        ->update([
                            'constructionOn' => '1',
                            'constructionName' => 'centre_entrainement',
                            'constructionDate' => $finishDate,
                            'Argent' => $argentClub - $this->centre_entrainement->prix_amelioriation,
                        ]);
                } elseif ($entrainementLevel == '3') {

                    $finishDate = $nowDate->add(new \DateInterval('P5M'));
                    Club::where('id', Auth::id())
                        ->update([
                            'constructionOn' => '1',
                            'constructionName' => 'centre_entrainement',
                            'constructionDate' => $finishDate,
                            'Argent' => $argentClub - $this->centre_entrainement->prix_amelioriation,
                        ]);
                } elseif ($entrainementLevel == '4') {

                    $finishDate = $nowDate->add(new \DateInterval('P9M'));
                    Club::where('id', Auth::id())
                        ->update([
                            'constructionOn' => '1',
                            'constructionName' => 'centre_entrainement',
                            'constructionDate' => $finishDate,
                            'Argent' => $argentClub - $this->centre_entrainement->prix_amelioriation,
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
        $clubuser = $this->clubuser;
        $argentClub = $clubuser->Argent;
        $centrejeuneLevel = $clubuser->centre_jeune_id;

        if ($clubuser->constructionOn == '0') {

            if ($clubuser->Argent >= $this->centre_jeune->prix_amelioriation) {

                $nowDate = new \DateTime;

                if ($centrejeuneLevel == '1') {

                    $finishDate = $nowDate->add(new \DateInterval('PT1M'));
                    Club::where('id', Auth::id())
                        ->update([
                            'constructionOn' => '1',
                            'constructionName' => 'centre_jeune',
                            'constructionDate' => $finishDate,
                            'Argent' => $argentClub - $this->centre_jeune->prix_amelioriation,
                        ]);
                } elseif ($centrejeuneLevel == '2') {

                    $finishDate = $nowDate->add(new \DateInterval('PT1M'));
                    Club::where('id', Auth::id())
                        ->update([
                            'constructionOn' => '1',
                            'constructionName' => 'centre_jeune',
                            'constructionDate' => $finishDate,
                            'Argent' => $argentClub - $this->centre_jeune->prix_amelioriation,
                        ]);
                } elseif ($centrejeuneLevel == '3') {

                    $finishDate = $nowDate->add(new \DateInterval('P5M'));
                    Club::where('id', Auth::id())
                        ->update([
                            'constructionOn' => '1',
                            'constructionName' => 'centre_jeune',
                            'constructionDate' => $finishDate,
                            'Argent' => $argentClub - $this->centre_jeune->prix_amelioriation,
                        ]);
                } elseif ($centrejeuneLevel == '4') {

                    $finishDate = $nowDate->add(new \DateInterval('P9M'));
                    Club::where('id', Auth::id())
                        ->update([
                            'constructionOn' => '1',
                            'constructionName' => 'centre_jeune',
                            'constructionDate' => $finishDate,
                            'Argent' => $argentClub - $this->centre_jeune->prix_amelioriation,
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
        return view('livewire.parc');
    }
}
