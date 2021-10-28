<?php

use App\Models\Club;
use App\Models\User;
use App\Models\Joueur;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JeuneController;
use App\Http\Controllers\LigueController;
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
    $clubUser = Auth::user()->clubUser;
    return view('index', compact('clubUser'));
})->name('Home');


/*-----------------------------------------------------------------------------------------------------------------------------------
| Route qui nécessite de être connecté                                                                                              |
-----------------------------------------------------------------------------------------------------------------------------------*/

Route::middleware(['auth'])->group(function () {

    Route::get('/creation', [crea_club_joueurController::class, 'indexAction'])->name('Creation');

    Route::post('/creation', [crea_club_joueurController::class, 'CreationClub']);

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

            Route::get('/Structure', [StructureController::class, 'structureAction'])->name('structure');

            Route::get('/Transfert', [TransfertController::class, 'transfertAction'])->name('transfert');

            Route::get('/Finance', [FinanceController::class, 'financeAction'])->name('finance');

            Route::get('/Jeune', [JeuneController::class, 'jeuneAction'])->name('jeune');
        });

    });

require __DIR__ . '/auth.php';
