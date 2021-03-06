<?php

use App\Models\Club;
use App\Models\User;
use App\Models\Joueur;
use App\Http\Livewire\Marche;
use App\Http\Livewire\Training;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JeuneController;
use App\Http\Controllers\LigueController;
use App\Http\Controllers\JoueurController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\EffectifController;
use App\Http\Controllers\TactiqueController;
use App\Http\Controllers\StructureController;
use App\Http\Controllers\TransfertController;
use App\Http\Controllers\EntrainementController;
use App\Http\Controllers\NotificationController;
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
    $clubuser = Club::where('user_id', Auth::id())->first();
    return view('index', compact('clubuser'));
})->name('Home');


/*-----------------------------------------------------------------------------------------------------------------------------------
| Route qui nécessite de être connecté                                                                                              |
-----------------------------------------------------------------------------------------------------------------------------------*/

Route::middleware(['auth'])->group(function () {


    // Protection qui bloque si la personne à un club
    Route::middleware(['NoClub'])->group(function () {

        Route::get('/creation', [crea_club_joueurController::class, 'indexAction'])->name('Creation');

        Route::post('/creation', [crea_club_joueurController::class, 'CreationClub']);
    });

/*-----------------------------------------------------------------------------------------------------------------------------------
| Route qui nécessite de avoir un club                                                                                            |
-----------------------------------------------------------------------------------------------------------------------------------*/

        Route::middleware(['clubs'])->group(function () {

            Route::get('/Accueil', [AccueilController::class, 'AccueilAction'])->name('Accueil');

            Route::get('/Notification', [NotificationController::class, 'notifAction'])->name('notification');

            Route::get('/Ligue', [LigueController::class, 'ligueAction'])->name('ligue');

            Route::get('/Effectif', [EffectifController::class, 'effectifAction'])->name('effectif');

            Route::get('/Tactique', [TactiqueController::class, 'tactiqueAction'])->name('tactique');

            Route::get('/Entrainement', [EntrainementController::class, 'entrainementAction'])->name('entrainement');

            Route::post('/Entrainement', [Training::class, 'entrainementLaunch']);

            Route::get('/Structure', [StructureController::class, 'structureAction'])->name('structure');

            Route::get('/Transfert', [TransfertController::class, 'transfertAction'])->name('transfert');

            Route::post('/Transfert', [Marche::class, 'achat'])->name('transfert.joueur');

            Route::get('/Finance', [FinanceController::class, 'financeAction'])->name('finance');

            Route::get('/Jeune', [JeuneController::class, 'jeuneAction'])->name('jeune');

            Route::get('/joueur/{joueur}', [JoueurController::class, 'joueurAction'])->name('joueur');

            Route::post('/joueur/{joueur}', [JoueurController::class, 'vente'])->name('joueur.vente');
        });

    });

require __DIR__ . '/auth.php';
