<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\User;
use App\Models\Joueur;
use App\Models\depense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class crea_club_joueurController extends Controller
{

    public function indexAction()
    {
        return view('Crea-club');
    }


    public function CreationClub()
    {

        $data = request()->validate([
            'nom' => 'required',
            'initial' => 'max:4|required',
            'nom_stade' => 'required',
        ]);
        $data['user_id'] = Auth::user()->id;

        $club = Club::create($data);

        $data_depense['mois3'] = 50;
        $data_depense['mois2'] = 50;
        $data_depense['club_id'] = $club->id;

        $depense_club = depense::create($data_depense);

        // Création du premier Gardien de but
        $gc = \App\Models\Joueur::factory(2)->postes('GC')->create(['club_id' => $club->id]);

        //Création du Défenseur gauche
        $DG = \App\Models\Joueur::factory(1)->postes('DG')->create(['club_id' => $club->id]);

        //Création du défenseur droit
        $DD = \App\Models\Joueur::factory(1)->postes('DD')->create(['club_id' => $club->id]);

        //Création du premier défenseur central
        $DC1 = \App\Models\Joueur::factory(3)->postes('DC')->create(['club_id' => $club->id]);

        //Création du mileu gauche
        $MG = \App\Models\Joueur::factory(1)->postes('MG')->create(['club_id' => $club->id]);

        //Création du mileu droit
        $MD = \App\Models\Joueur::factory(1)->postes('MD')->create(['club_id' => $club->id]);

        //création du mileu central
        $MC1 = \App\Models\Joueur::factory(3)->postes('MC')->create(['club_id' => $club->id]);

        //Création du Buteur
        $BU = \App\Models\Joueur::factory(2)->postes('BU')->create(['club_id' => $club->id]);

        return redirect('/Accueil');

    }
}
