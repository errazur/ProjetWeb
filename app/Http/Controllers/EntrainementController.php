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
        return view('entrainement');
    }


}
