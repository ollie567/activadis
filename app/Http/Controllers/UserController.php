<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //voegt een user toe
    public function addUser(Request $request)
    {
        // aanroepen van de user model
        $addUser = new User();
        // Vullen van de contact variabelen
        $addUser->name = $request->name;
        $addUser->email = $request->email;
        //hashed het wachtwoord
        $addUser->password = Hash::make($request->password);
        $addUser->is_admin = $request->is_admin;
        // Opslaan in de databasebooking
        $addUser->save();

        // Terugsturen met succes bericht
        return redirect('/adminUserView')->with('message', 'gebruiker aangemaakt');
    }

    public function deleteUser(Request $request)
    {
        //aanroepen van de user model
        $deleteUser = new User();
        //verwijdert de user
        $deleteUser::where('id', '=', $request->id)->delete();

        // Terugsturen met succes bericht
        return redirect('/adminUserView')->with('message', 'gebruiker verwijdert');
    }


}
