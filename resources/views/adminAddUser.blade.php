@extends('layout')
@section('content')
    <div class="container">

    <form action="/addUser/add">
    <div class="form-group">
                <label for="name">gebruikersnaam</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label for="definition">email</label>
                <input type="text" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label for="price">wachtwoord</label>
                <input type="text" class="form-control" name="password">
            </div>
            <div class="form-group">
                <label for="price">is admin</label>
                <input type="text" class="form-control" name="is_admin">
            </div>
           

            <button type="submit" class="btn btn-primary mb-2">Maak gebruiker aan</button>

    </form>

    </div>
@endsection
