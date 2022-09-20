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
        $newbooking = new Activiteit();
        // Vullen van de contact variabelen
        $newbooking->activiteitnaam = $request->naam;
        $newbooking->activiteitlocatie = $request->locatie;
        $newbooking->activeitomschrijving = $request->omschrijving;
        $newbooking->activeiteten = $request->eten;
        $newbooking->activiteitmindeelnemers = $request->mindeelnemers;
        $newbooking->activiteitmaxdeelnemers = $request->maxdeelnemers;
        $newbooking->activiteitkosten = $request->kosten;
        $newbooking->activiteitbenodigheden = $request->benodigheden;
        $newbooking->activiteitbegintijd = $request->btijd;
        $newbooking->activiteiteindtijd = $request->etijd;
        $newbooking->activiteitafbeelding = $request->afbeelding;
        // Opslaan in de databasebooking
        $newbooking->save();

        // Terugsturen met succes bericht
        return redirect('/adminoverzicht')->with('message', 'Uw booking was succesful');
    }

    public function deleteActiviteit(Request $request)
    {
        // Aanmaken nieuw contact inzending
        $newbooking = new Activiteit();
        // Vullen van de contact variabelen
        $newbooking->ID = $request->id;
        // Opslaan in de databasebooking
//        $newbooking->delete();
        $newbooking::where('ID', '=', $request->id)->delete();

        // Terugsturen met succes bericht
        return redirect('/adminoverzicht')->with('message', 'Uw booking was succesful');
    }
}







