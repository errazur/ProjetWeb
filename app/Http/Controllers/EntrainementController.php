<?php

namespace App\Http\Controllers;

use App\Models\Joueur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class EntrainementController extends Controller
{

    public function entrainementAction()
    {
        $clubuser = Auth::user()->clubUser;
        return view('entrainement', compact('clubuser'));
    }


}
