@extends('layout')
@section('content')
    <div class="container">

    <form action="/testpage.blade.php">
    <div class="form-group">
                <label for="name">activiteitnaam</label>
                <input type="text" class="form-control" name="activiteitnaam">
            </div>
            <div class="form-group">
                <label for="definition">locatie</label>
                <input type="text" class="form-control" name="locatie">
            </div>
            <div class="form-group">
                <label for="price">inclusief eten</label>
                <input type="text" class="form-control" name="inclusief eten">
            </div>
            <div class="form-group">
                <label for="price">minimaal aantal deelnemers</label>
                <input type="text" class="form-control" name="minimaal aantal deelnemers">
            </div>
            <div class="form-group">
                <label for="price">maximaal aantal deelnemers</label>
                <input type="text" class="form-control" name="maximaal aantal deelnemers">
            </div>
            <div class="form-group">
                <label for="price">kosten</label>
                <input type="text" class="form-control" name="kosten">
            </div>
            <div class="form-group">
                <label for="price">benodigdheden</label>
                <input type="text" class="form-control" name="benodigdheden">
            </div>
            <div class="form-group">
                <label for="price">omschrijving</label>
                <input type="text" class="form-control" name="omschrijving">
            </div>
            <div class="form-group">
                <label for="price">begin tijd</label>
                <input type="text" class="form-control" name="begin tijd">
            </div>
            <div class="form-group">
                <label for="price">eindtijd</label>
                <input type="text" class="form-control" name="eindtijd">
            </div>
            <div class="form-group">
                <label for="price">afbeelding</label>
                <input type="text" class="form-control" name="afbeelding">
            </div>

            <button type="submit" class="btn btn-primary mb-2">Maak evenement aan</button>

    </form>

    </div>
@endsection
