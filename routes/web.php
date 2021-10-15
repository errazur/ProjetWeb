<?php

use App\Http\Controllers\crea_club_joueurController;
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



Route::get('/', function () {
    return view('index');
})->name('Home');

Route::get('/creation', [crea_club_joueurController::class, 'indexAction'])->name('Creation');

Route::post('/creation', [crea_club_joueurController::class, 'CreationClub']);

Route::get('/Accueil', function () {
    return view('accueil-connecter');
})->name('Accueil');

Route::get('/Notification', function () {
    return view('notification');
})->name('notification');

Route::get('/Ligue', function () {
    return view('ligue');
})->name('ligue');

Route::get('/Effectif', function () {
    return view('effectif');
})->name('effectif');

Route::get('/Tactique', function () {
    return view('tactics');
})->name('tactique');

Route::get('/Entrainement', function () {
    return view('entrainement');
})->name('entrainement');

Route::get('/Structure', function () {
    return view('structure');
})->name('structure');

Route::get('/transfere', function () {
    return view('transfere');
})->name('transfere');

Route::get('/Finance', function () {
    return view('finance');
})->name('finance');

Route::get('/Jeune', function () {
    return view('jeune');
})->name('jeune');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::middleware(['auth'])->group(function () {
});

require __DIR__ . '/auth.php';
