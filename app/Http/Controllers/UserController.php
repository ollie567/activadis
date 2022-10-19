<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function addUser(Request $request)
    {
        // Aanmaken nieuw contact inzending
        $addUser = new User();
        // Vullen van de contact variabelen

        $addUser->name = $request->name;
        $addUser->email = $request->email;
        $addUser->password = $request->password;
        $addUser->is_admin = $request->is_admin;
        // Opslaan in de databasebooking
        $addUser->save();

        // Terugsturen met succes bericht
        return redirect('/adminUserView')->with('message', 'gebruiker aangemaakt');
    }

    public function deleteUser(Request $request)
    {

        $deleteUser = new User();

        $deleteUser->id = $request->id;

        $deleteUser::where('id', '=', $request->id)->delete();

        // Terugsturen met succes bericht
        return redirect('/adminUserView')->with('message', '');
    }


}
