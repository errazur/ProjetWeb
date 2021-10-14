<?php

use App\Models\Club;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
    return view('index');
})->name('Home');

Route::get('/creation', function(){
    return view('Crea-club');
})->name('Creation');

Route::post('/creation',function() {

    $data = request()->validate([
        'nom' => 'required',
        'initial' => 'max:4|required',
        'nom_stade' => 'required',
    ]);
    $data['user_id']= Auth::user()->id;

    $club = Club :: create($data);

    return redirect('/Accueil');
});

Route::get('/Accueil', function () {
    return view('accueil-connecter');
})->name('Accueil');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::middleware(['auth'])->group(function () {




});

require __DIR__.'/auth.php';
