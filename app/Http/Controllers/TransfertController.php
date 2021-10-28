<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransfertController extends Controller
{
    public function transfertAction(){
        $clubuser = Auth::user()->clubUser;
        return view('transfert',compact('clubuser'));

    }
}
