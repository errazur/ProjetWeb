<?php

declare(strict_types = 1);

namespace App\Charts;

use App\Models\depense;
use Chartisan\PHP\Chartisan;
use Illuminate\Http\Request;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Support\Facades\Auth;

class FinanceChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {

        $clubuser = Auth::user()->clubUser;
        $depense_club = depense::where('club_id', $clubuser->id)->first();
        $mois3 = $depense_club->mois3;
        $mois2 = $depense_club->mois2;
        $moisnow = $clubuser->Argent;

        return Chartisan::build()
            ->labels(['3ème mois','2ème mois','mois actuel'])
            ->dataset('Argent', [$mois3, $mois2, $moisnow]);
    }
}
