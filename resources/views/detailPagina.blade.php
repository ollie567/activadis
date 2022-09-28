@extends('layout')

@section('content')
    <?php
    $detail = DB::table('activiteiten')->where('ID', $_GET['id'])->get();
    ?>
@foreach($detail as $activ)
    @if($activ->activiteiteten = true)
        <?php $eten = 'ja'?>
    @else
        <?php $eten = 'nee'?>
    @endif
<h1 class="w-100 text-center m-2">{{$activ->activiteitnaam}}</h1>
<div class="w-100 d-flex justify-content-center">


        <div id="carouselExampleIndicators" class="carousel slide w-50 mt-3" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{$activ->activiteitafbeelding}}" alt="First slide" style="height: 600px;">
                </div>
            </div>
        </div>
    </div>
    <div style="width: 100%">

        <div class="text-center" style="width: 100%; margin-top: 30px">
            <button class="btn btn-primary" type="submit" style="width: 150px; height: 50px;">aanmelden</button>
        </div>

    </div>
    <div class="mt-3 d-flex flex-row flex-wrap justify-content-center">
        <div class="card m-3" style="width: 18rem;">
            <div class="card-body">
            <div class="card-header"><h4 class="card-title">locatie</h4></div>
                <p class="card-text">{{$activ->activiteitlocatie}}</p>
                <a href="#" class="btn btn-primary">Map</a>
            </div>
        </div>

        <div class="card m-3" style="width: 18rem;">
            <div class="card-body">
            <div class="card-header"><h4 class="card-title">Inclusief eten</h4></div>
                <p class="card-text"><?php echo $eten?> het evenement heeft eten en drinken erbij</p>
            </div>
        </div>

        <div class="card m-3" style="width: 18rem;">
            <div class="card-body">
            <div class="card-header"><h4 class="card-title">minimaal en maximaal aantal deelnemers</h4></div>
                <p class="card-text">er moeten minimaal {{$activ->activiteitmindeelnemers}} mensen zich aanmelden
                    voor dit evenement en er kunnen maximaal {{$activ->activiteitmaxdeelnemers}} mensen hieraan deelnemen
                </p>
                <a href="#" class="btn btn-primary">Meer informatie</a>
            </div>
        </div>

        <div class="card m-3" style="width: 18rem;">
            <div class="card-body">
            <div class="card-header"><h4 class="card-title">Speciale benodigheden</h4></div>
                <p class="card-text">ja hebt hier een {{$activ->activiteitbenodigheden}} nodig </p>
                <a href="#" class="btn btn-primary">Meer informatie</a>
            </div>
        </div>

        <div class="card m-3" style="width: 18rem;">
            <div class="card-body">
            <div class="card-header"><h4 class="card-title">Kosten</h4></div>
                <p class="card-text">voor deze activiteit komen er kosten voor de gebruiker van {{$activ->activiteitkosten}} euro p.p.</p>
                <a href="#" class="btn btn-primary">Meer informatie</a>
            </div>
        </div>

        <div class="card m-3" style="width: 18rem;">
            <div class="card-body">
            <div class="card-header"><h4 class="card-title">tijden</h4></div>
                <p class="card-text">het begintijd is {{$activ->activiteitbegintijd}} uur en het eindtijd is {{$activ->activiteiteindtijd}} uur</p>
                <a href="#" class="btn btn-primary">Meer informatie</a>
            </div>
        </div>

        <div class="card m-3" style="width: 18rem;">
            <div class="card-body">
            <div class="card-header"><h4 class="card-title">Omschrijving</h4></div>
                <p class="card-text">{{$activ->activeitomschrijving}}</p>
                <a href="#" class="btn btn-primary">Meer informatie</a>
            </div>
        </div>
        @endforeach
    </div>

@endsection
