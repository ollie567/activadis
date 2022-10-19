<?php

namespace App\Http\Controllers;

use App\Models\ActivityRegistration;
use Illuminate\Http\Request;

class ActivityRegistrationController extends Controller
{
    //functie om de database te vullen voor een inschrijving
    public function store(){

        //vullen van de registratie variabele
        $attributes = request()->validate( [
            'activityId' => 'required',
            'userId' => 'required'
        ]);

        ActivityRegistration::create($attributes)->save();

        return redirect('/')->with('success', 'het inschrijven is gelukt');
    }
}
