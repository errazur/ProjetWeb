<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TactiqueController extends Controller
{
    public function tactiqueAction(){
        $clubuser = Auth::user()->clubUser;
        return view('tactics',compact('clubuser'));

     }
}
