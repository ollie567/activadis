<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Activiteit;

class ActiviteitController extends Controller
{
    //deze functie plaats een activiteit in de database
    public function addActiviteit(Request $request)
    {
        // het aanroepen van het activiteit model
        $addactiviteit = new Activiteit();
        // Vullen van de activiteit variabelen

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
        // Opslaan in de database
        $addactiviteit->save();

        // Terugsturen met succes bericht
        return redirect('/adminActivityView')->with('message', 'activiteit toegevoegd');
    }

    //deze functie verwijdert de gekozen activiteit
    public function deleteActiviteit(Request $request)
    {
        // aanroepen van het activiteit model
        $deleteactiviteit = new Activiteit();
        // verwijder uit de database
        $deleteactiviteit::where('ID', '=', $request->id)->delete();

        // Terugsturen met succes bericht
        return redirect('/adminActivityView')->with('message', 'activiteit gedeleted');
    }

}







