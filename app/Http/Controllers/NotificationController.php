<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function notifAction(){

        $clubuser = Auth::user()->clubUser;

        return view('notification',compact('clubuser'));

    }
}
