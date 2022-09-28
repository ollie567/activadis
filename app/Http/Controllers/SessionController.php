<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{

    public function store()
    {
        // Vullen van de user variabelen
        $attributes = request()->validate( [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // check of het de juiste credentials zijn
        if (! auth()->attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'je inloggegevens kloppen niet.'
            ]);
        }

        // Kloppen de credentials, stuur het dat terug naar de homepage met een succes message
        return redirect('/')->with('success', 'Welkom terug!');
    }

    public function destroy()
    {
        // laravel authorization function om uit te loggen
        auth()->logout();

        // Terugsturen met succes bericht
        return redirect('/login')->with('success', 'Tot ziens!');
    }
}
