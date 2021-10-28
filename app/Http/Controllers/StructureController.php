<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StructureController extends Controller
{
    public function structureAction(){
        $clubuser = Auth::user()->clubUser;
        return view('structure',compact('clubuser'));

     }
}
