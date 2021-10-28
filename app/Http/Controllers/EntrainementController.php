<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EntrainementController extends Controller
{
    public function entrainementAction(){
        $clubuser = Auth::user()->clubUser;
        return view('entrainement',compact('clubuser'));

     }
}
