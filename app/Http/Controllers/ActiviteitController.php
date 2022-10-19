<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Activiteit;

class ActiviteitController extends Controller
{
    public function addActiviteit(Request $request)
    {
        // Aanmaken nieuw contact inzending
        $addactiviteit = new Activiteit();
        // Vullen van de contact variabelen

        $addactiviteit->activiteitnaam = $request->naam;
        $addactiviteit->activiteitlocatie = $request->locatie;
        $addactiviteit->activeitomschrijving = $request->omschrijving;
        $addactiviteit->activeiteten = $request->eten;
        $addactiviteit->activiteitmindeelnemers = $request->mindeelnemers;
        $addactiviteit->activiteitmaxdeelnemers = $request->maxdeelnemers;
        $addactiviteit->activiteitkosten = $request->kosten;
        $addactiviteit->activiteitbenodigheden = $request->benodigheden;
        $addactiviteit->activiteitbegintijd = $request->btijd;
        $addactiviteit->activiteiteindtijd = $request->etijd;
        $addactiviteit->activiteitafbeelding = $request->afbeelding;
        // Opslaan in de databasebooking
        $addactiviteit->save();

        // Terugsturen met succes bericht
        return redirect('/adminActivityView')->with('message', 'Uw booking was succesful');
    }

    public function deleteActiviteit(Request $request)
    {
        // Aanmaken nieuw contact inzending
        $deleteactiviteit = new Activiteit();
        // Vullen van de contact variabelen
        $deleteactiviteit->ID = $request->id;
        // Opslaan in de databasebooking
        $deleteactiviteit::where('ID', '=', $request->id)->delete();

        // Terugsturen met succes bericht
        return redirect('/adminActivityView')->with('message', 'Uw booking was succesful');
    }

}







