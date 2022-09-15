<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ActiviteitController extends Controller
{
    public function addActiviteit(Request $request)
    {
        // Aanmaken nieuw contact inzending
        $newbooking = new Booking();
        // Vullen van de contact variabelen
        $newbooking->activiteitnaam = $request->;
        $newbooking->activiteitlocatie = $request->locatie;
        $newbooking->activeitomschrijving = $request->;
        $newbooking->activeiteten = $request->;
        $newbooking->activiteitmindeelnemers = $request->;
        $newbooking->activiteitmaxdeelnemers = $request->;
        $newbooking->activiteitkosten = $request->;
        $newbooking->activiteitbenodigheden = $request->;
        $newbooking->activiteitbegintijd = $request->;
        $newbooking->activiteiteindtijd = $request->;
        $newbooking->activiteitafbeelding = $request->afbeelding;
        // Opslaan in de databasebooking
        $newbooking->save();

        // Terugsturen met succes bericht
        return redirect('/piratehotel')->with('message', 'Uw booking was succesful');
    }
}







