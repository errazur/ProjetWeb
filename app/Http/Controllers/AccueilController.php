<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccueilController extends Controller
{
    public function accueilAction(){

        $clubuser = Auth::user()->clubUser;

        return view('Accueil-connecter',compact('clubuser'));

    }
}
