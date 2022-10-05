<?php

namespace App\Http\Controllers;

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
        return redirect('/activityoverzicht')->with('message', 'Uw booking was succesful');
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
        return redirect('/activityoverzicht')->with('message', 'Uw booking was succesful');
    }

    public function editActiviteit(Request $request)
    {
//        $table = new Activiteit();
//        $functie = $table::where(ID, 7);
//        $functie->activiteitnaam='paintball';
//        $functie->save();

//        $request->validate([
//            'activiteitnaam'=>'required',
//            'activiteitlocatie'=>'required',
//            'activeitomschrijving'=>'required',
//            'activeiteten'=>'required',
//            'activiteitmindeelnemers'=>'required',
//            'activiteitmaxdeelnemers'=>'required',
//            'activiteitkosten'=>'required',
//            'activiteitbegintijd'=>'required',
//            'activiteiteindtijd'=>'required',
//            'activiteitafbeelding'=>'required',
//        ]);
//        DB::table('activiteiten')->where('ID','=',$id)->update([]);
//        $update=table::find(ID);
        $activiteitid = $request->id;
        $naam = $request->naam;
        $locatie = $request->locatie;
        $omschrijving = $request->omschrijving;
        $eten = $request->eten;
        $mindeelnemers = $request->mindeelnemers;
        $maxdeelnemers = $request->maxdeelnemers;
        $kosten = $request->kosten;
        $benodigheden = $request->benodigheden;
        $btijd = $request->btijd;
        $etijd = $request->etijd;
        $afbeelding = $request->afbeelding;
//        DB::table('update activiteiten set activiteitnaam =' . $naam . ',activiteitlocatie ='. $locatie . ',activeitomschrijving =' . $omschrijving .
//            ',activeiteten =' . $eten . ',activiteitmindeelnemers ='. $mindeelnemers .',activiteitmaxdeelnemers ='. $maxdeelnemers .',activiteitkosten ='. $kosten .
//            ',activiteitbenodigheden =' . $benodigheden . ',activiteitbegintijd ='. $btijd . ',activiteiteindtijd ='.$etijd. ',activiteitafbeelding ='. $afbeelding .
//            ',where ID =' . $activiteitid );




        // Aanmaken nieuw contact inzending
        $id = 7;
        $table = new Activiteit();
        $newbooking = $table::query()->find(7);
        // Vullen van de contact variabelen
//        $newbooking->ID= $activiteitid;
        $newbooking->activiteitnaam = $naam;
        $newbooking->activiteitlocatie = $locatie;
        $newbooking->activeitomschrijving = $omschrijving;
        $newbooking->activeiteten = $eten;
        $newbooking->activiteitmindeelnemers = $mindeelnemers;
        $newbooking->activiteitmaxdeelnemers = $maxdeelnemers;
        $newbooking->activiteitkosten = $kosten;
        $newbooking->activiteitbenodigheden = $benodigheden;
        $newbooking->activiteitbegintijd = $btijd;
        $newbooking->activiteiteindtijd = $etijd;
        $newbooking->activiteitafbeelding = $afbeelding;
        $newbooking->save();
//         Opslaan in de databasebooking
//        Activiteit::whereId(7)->update($newbooking);

//        DB::table('activiteiten')->where('ID', $id)->update(
//        Activiteit::where('ID', $id)->update(
//            [
//            'activiteitnaam' => $naam,
//            'activiteitlocatie' => $locatie,
//            'activeitomschrijving' => $omschrijving,
//            'activeiteten' => $eten,
//            'activiteitmindeelnemers' => $mindeelnemers,
//            'activiteitmaxdeelnemer' => $maxdeelnemers,
//            'activiteitkosten' => $kosten,
//            'activiteitbenodigheden' => $benodigheden,
//            'activiteitbegintijd' => $btijd,
//            'activiteiteindtijd' => $etijd,
//            'activiteitafbeelding' => $afbeelding,
//            ]
//        );

        return redirect('/activityoverzicht')->with('message', 'Uw booking was succesful');
    }
}







