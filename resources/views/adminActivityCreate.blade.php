@extends('layout')
@section('content')

<div class="container">
<form action="/activiteit/add" method="GET">
        @csrf
        <input type="hidden" name="id" value="">
        <div class="form-group">
            <label for="price">afbeelding link</label>
            <input type="text" class="form-control" name="afbeelding"
                   value="">
        </div>
        <div class="form-group">
            <label for="price">Naam</label>
            <input type="text" class="form-control" name="naam"
                   value="">
        </div>
        <div class="form-group">
            <label for="name">Locatie</label>
            <input type="text" class="form-control" name="locatie"
                   value="">
        </div>
        <div class="form-group">
            <label for="price">inclusief eten </label>
            <p style="display: flex"><input type="radio" class="form-control" name="eten" value="ja" style="width: 75px">ja</p>
            <p style="display: flex"><input type="radio" class="form-control" name="eten" value="ja" style="width: 75px">nee</p>
        </div>

        <div class="form-group">
            <label for="price">minimaal aantal deelnemers</label>
            <input type="number" class="form-control" name="mindeelnemers" required
                   value="0">
        </div>
        <div class="form-group">
            <label for="price">max deelnemers</label>
            <input type="number" class="form-control" name="maxdeelnemers" required
                   value="10">
        </div>
        <div class="form-group">
            <label for="price">kosten</label>
            <input type="text" class="form-control" name="kosten" required
                   value="">
        </div>
        <div class="form-group">
            <label for="price">benodigenheden</label>
            <input type="text" class="form-control" name="benodigheden"
                   value="">
        </div>
        <div class="form-group">
            <label for="price">begintijd</label>
            <input type="text" class="form-control" name="btijd" required
                   value="">
        </div>
        <div class="form-group">
            <label for="price">eindtijd</label>
            <input type="text" class="form-control" name="etijd" required
                   value="">
        </div>
        <div class="form-group">
            <label for="price">omschrijving</label>
            <input type="text" class="form-control" name="omschrijving" required
                   value="">
        </div>

        <button type="submit" class="btn btn-primary mb-2">voeg activiteit</button>
    </form>
</div>


@endsection
