@extends('layout')
@section('content')

<div class="container">

<form method="">
        @csrf

        <div class="form-group">
            <label for="price">afbeelding link</label>
            <input type="text" class="form-control" name="attractionMinLengthWithSupervisor"
                   value="https://www.trackjackeurope.com/wp-content/uploads/2020/09/jetski.jpg">
        </div>
        <div class="form-group">
            <label for="name">Locatie</label>
            <input type="text" class="form-control" name="attractionName"
                   value="stroombroek in braamt">
        </div>
        <div class="form-group">
            <label for="price">inclusief eten </label>
            <input type="text" class="form-control" name="attractionDescription"
                   value="ja het evenement heeft eten en drinken erbij">
        </div>

        <div class="form-group">
            <label for="price">minimaal aantal deelnemers</label>
            <input type="text" class="form-control" name="attractionImage"
                   value="er moeten minimaal 10 mense zich aanmelden
                    voor dit evenement en er kunnen maximaal 30 mensen hieraan deelnemen">
        </div>
        <div class="form-group">
            <label for="price">max deelnemers</label>
            <input type="text" class="form-control" name="attractionLoation"
                   value="0">
        </div>
        <div class="form-group">
            <label for="price">kosten</label>
            <input type="text" class="form-control" name="attractionWaittime"
                   value="voor deze activiteit komen er kosten voor de gebruiker van 30 euro p.p.">
        </div>
        <div class="form-group">
            <label for="price">benodigenheden</label>
            <input type="text" class="form-control" name="attractionMinLength"
                   value="ja hebt hier een rijbewijs voor nodig anders mag je niet op een jet ski">
        </div>
        <div class="form-group">
            <label for="price">begintijd</label>
            <input type="text" class="form-control" name="attractionMinLengthWithSupervisor"
                   value="14:00">
        </div>
        <div class="form-group">
            <label for="price">eindtijd</label>
            <input type="text" class="form-control" name="attractionMinLengthWithSupervisor"
                   value="16:00">
        </div>
        <div class="form-group">
            <label for="price">omschrijving</label>
            <input type="text" class="form-control" name="attractionMinLengthWithSupervisor"
                   value="Hier nog eventuele informatie van de activiteit">
        </div>

        <button type="submit" class="btn btn-primary mb-2">Edit activiteit</button>

    </form>
</div>


@endsection
