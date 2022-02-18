<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\Joueur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransfertController extends Controller
{


    public function transfertAction(){

        return view('transfert');

    }
}
