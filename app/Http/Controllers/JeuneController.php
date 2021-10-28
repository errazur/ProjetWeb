<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JeuneController extends Controller
{
    public function jeuneAction(){
        $clubuser = Auth::user()->clubUser;
        return view('jeune',compact('clubuser'));

    }
}
