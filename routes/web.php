<?php

use App\Models\Club;
use App\Models\User;
use App\Models\Joueur;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\crea_club_joueurController;

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



Route::get('/', function () {
    return view('index');
})->name('Home');

Route::get('/creation', [crea_club_joueurController::class, 'indexAction'])->name('Creation');

Route::post('/creation', [crea_club_joueurController::class, 'CreationClub']);

Route::get('/Accueil', function () {
    $ClubUser = Club::where('id', Auth::id())->first();
    return view('accueil-connecter',compact('ClubUser'));
})->name('Accueil');

Route::get('/Notification', function () {
    $ClubUser = Club::where('id', Auth::id())->first();
    return view('notification', compact('ClubUser'));
})->name('notification');

Route::get('/Ligue', function () {
    $ClubUser = Club::where('id', Auth::id())->first();
    return view('ligue', compact('ClubUser'));
})->name('ligue');

Route::get('/Effectif', function () {
    $ClubUser = Club::where('id', Auth::id())->first();
    return view('effectif', compact('ClubUser'));
})->name('effectif');

Route::get('/Tactique', function () {
    $ClubUser = Club::where('id', Auth::id())->first();
    $effectifUser = Joueur::where('club_id', $ClubUser)->get();
    return view('tactics', compact('ClubUser'));
})->name('tactique');

Route::get('/Entrainement', function () {
    $ClubUser = Club::where('id', Auth::id())->first();
    $effectifUser = Joueur::where('club_id', $ClubUser)->get();
    return view('entrainement', compact('ClubUser'));
})->name('entrainement');

Route::get('/Structure', function () {
    $ClubUser = Club::where('id', Auth::id())->first();
    return view('structure', compact('ClubUser'));
})->name('structure');

Route::get('/transfere', function () {
    $ClubUser = Club::where('id', Auth::id())->first();
    return view('transfere', compact('ClubUser'));
})->name('transfere');

Route::get('/Finance', function () {
    $ClubUser = Club::where('id', Auth::id())->first();
    return view('finance', compact('ClubUser'));
})->name('finance');

Route::get('/Jeune', function () {
    $ClubUser = Club::where('id', Auth::id())->first();
    return view('jeune', compact('ClubUser'));
})->name('jeune');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::middleware(['auth'])->group(function () {
});

require __DIR__ . '/auth.php';
