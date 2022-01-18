<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EffectifController extends Controller
{

    public function effectifAction(){

       return view('effectif');

    }
}
