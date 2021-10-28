<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LigueController extends Controller
{
    public function ligueAction(){
        $clubuser = Auth::user()->clubUser;
        return view('ligue',compact('clubuser'));

     }
}
