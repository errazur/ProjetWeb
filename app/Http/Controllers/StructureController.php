<?php

namespace App\Http\Controllers;

use App\Models\Stade;
use App\Models\Centre_jeune;
use Illuminate\Http\Request;
use App\Models\Centre_entrainement;
use Illuminate\Support\Facades\Auth;

class StructureController extends Controller
{
    public function structureAction(){
        $clubuser = Auth::user()->clubUser;
        $stade = Stade::where('id', $clubuser->id)->first();
        $centre_entrainement = Centre_entrainement::where('id', $clubuser->id)->first();
        $centre_jeune = Centre_jeune::where('id', $clubuser->id)->first();
        return view('structure',compact('clubuser','stade','centre_entrainement','centre_jeune'));

     }
}
