@extends('layout')

@section('content')
<h1 class="w-100 text-center m-2">Jet ski</h1>
<div class="w-100 d-flex justify-content-center">

        <div id="carouselExampleIndicators" class="carousel slide w-50 mt-3" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://www.trackjackeurope.com/wp-content/uploads/2020/09/jetski.jpg" alt="First slide" style="height: 600px;">
                </div>
            </div>
        </div>
    </div>
    <div style="width: 100%">
        <button style="margin-left: 500px; width: 500px">Aanmelden</button>
    </div>
    <div class="mt-3 d-flex flex-row flex-wrap justify-content-center">
        <div class="card m-3" style="width: 18rem;">
            <div class="card-body">
            <div class="card-header"><h4 class="card-title">locatie</h4></div>
                <p class="card-text">stroombroek in braamt</p>
                <a href="#" class="btn btn-primary">Map</a>
            </div>
        </div>

        <div class="card m-3" style="width: 18rem;">
            <div class="card-body">
            <div class="card-header"><h4 class="card-title">Inclusief eten</h4></div>
                <p class="card-text">ja het evenement heeft eten en drinken erbij</p>
            </div>
        </div>

        <div class="card m-3" style="width: 18rem;">
            <div class="card-body">
            <div class="card-header"><h4 class="card-title">minimaal en maximaal aantal deelnemers</h4></div>
                <p class="card-text">er moeten minimaal 10 mense zich aanmelden
                    voor dit evenement en er kunnen maximaal 30 mensen hieraan deelnemen
                </p>
                <a href="#" class="btn btn-primary">Meer informatie</a>
            </div>
        </div>

        <div class="card m-3" style="width: 18rem;">
            <div class="card-body">
            <div class="card-header"><h4 class="card-title">Speciale benodigheden</h4></div>
                <p class="card-text">ja hebt hier een rijbewijs voor nodig anders mag je niet op een jet ski</p>
                <a href="#" class="btn btn-primary">Meer informatie</a>
            </div>
        </div>

        <div class="card m-3" style="width: 18rem;">
            <div class="card-body">
            <div class="card-header"><h4 class="card-title">Kosten</h4></div>
                <p class="card-text">voor deze activiteit komen er kosten voor de gebruiker van 30 euro p.p.</p>
                <a href="#" class="btn btn-primary">Meer informatie</a>
            </div>
        </div>

        <div class="card m-3" style="width: 18rem;">
            <div class="card-body">
            <div class="card-header"><h4 class="card-title">tijden</h4></div>
                <p class="card-text">het begintijd is 14:00 uur en het eindtijd is 16:00 uur</p>
                <a href="#" class="btn btn-primary">Meer informatie</a>
            </div>
        </div>

        <div class="card m-3" style="width: 18rem;">
            <div class="card-body">
            <div class="card-header"><h4 class="card-title">Omschrijving</h4></div>
                <p class="card-text">Hier nog eventuele informatie van de activiteit</p>
                <a href="#" class="btn btn-primary">Meer informatie</a>
            </div>
        </div>

    </div>

@endsection
