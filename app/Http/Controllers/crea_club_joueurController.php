<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\User;
use App\Models\Joueur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


class crea_club_joueurController extends Controller
{

    public function indexAction(){

        return view('Crea-club');

    }


    public function CreationClub(){

        $data = request()->validate([
            'nom' => 'required',
            'initial' => 'max:4|required',
            'nom_stade' => 'required',
        ]);
        $data['user_id'] = Auth::user()->id;

        $club = Club::create($data);


    }



}
