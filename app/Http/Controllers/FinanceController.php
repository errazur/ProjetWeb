<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FinanceController extends Controller
{
    public function financeAction(){
        $clubuser = Auth::user()->clubUser;
        return view('finance',compact('clubuser'));

    }
}
