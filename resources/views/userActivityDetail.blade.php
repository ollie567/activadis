@extends('layout')

@section('content')
    <?php
    $detail = DB::table('activiteiten')->where('ID', $_GET['id'])->get();
    ?>
@foreach($detail as $activ)
<h1 class="w-100 text-left m-2" style="padding-left: 250px">{{$activ->activiteitnaam}}</h1>
<div class="d-flex justify-content-lg-start" style=" width: 100%">

    <div style="width: 100%; padding-left: 50px">
        <div id="carouselExampleIndicators" class="carousel slide w-100 mt-3" data-ride="carousel">
            <div class="carousel-inner" >
                <div class="carousel-item active w-100">
                    <img class="d-block w-100" src="{{$activ->activiteitafbeelding}}" alt="First slide" style="height: 600px;">
                </div>
            </div>
        </div>
    </div>


    <div class="mt-3 d-flex flex-row flex-wrap justify-content-center">
        <div class="card m-3" style="width: 18rem;">
            <div class="card-body">
                <div class="card-header"><h4 class="card-title">Locatie</h4></div>
                <p class="card-text">{{$activ->activiteitlocatie}} om {{$activ->activiteitbegintijd}} tot {{$activ->activiteiteindtijd}}</p>
            </div>
        </div>

        <div class="card m-3" style="width: 18rem;">
            <div class="card-body">
                <div class="card-header"><h4 class="card-title">Inclusief eten</h4></div>
                <p class="card-text">{{$activ->activeiteten}}</p>
            </div>
        </div>

        <div class="card m-3" style="width: 18rem;">
            <div class="card-body">
                <div class="card-header"><h4 class="card-title">Aantal deelnemers</h4></div>
                <table class="table">
                    <thead class="thead-dark">
                    <th>Minimaal</th>
                    <th>Maximaal</th>
                    </thead>
                    <tr>
                        <td>{{$activ->activiteitmindeelnemers}} mensen</td>
                        <td>{{$activ->activiteitmaxdeelnemers}} mensen</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="card m-3" style="width: 18rem;">
            <div class="card-body">
                <div class="card-header"><h4 class="card-title">Speciale benodigheden</h4></div>
                @if($activ->activiteitbenodigheden == null)
                    <p class="card-text"> Je hebt niks nodig</p>
                    @else
                    <p class="card-text">Je hebt hier een {{$activ->activiteitbenodigheden}} nodig </p>

                @endif
            </div>
        </div>

        <div class="card m-3" style="width: 18rem;">
            <div class="card-body">
                <div class="card-header"><h4 class="card-title">Kosten</h4></div>
                <p class="card-text">De kosten voor deze activiteit zijn €{{$activ->activiteitkosten}} p.p.</p>
            </div>
        </div>

        <div class="card m-3" style="width: 18rem;">
            <div class="card-body">
                <div class="card-header"><h4 class="card-title">Omschrijving</h4></div>
                <p class="card-text">{{$activ->activeitomschrijving}}</p>
            </div>
        </div>
    </div>

        @endforeach
    </div>

    <div class="text-center" style="width: 100%; margin-top: 30px">
        @if(App\Models\ActivityRegistration::where( 'activityId', '=', $activ->ID)->exists() &&
 App\Models\ActivityRegistration::where('userId', '=', \Illuminate\Support\Facades\Auth::user()->id)->exists())
            <form action="/signOutForActivity" method="post">
                @csrf
                <button class="btn btn-primary" type="submit" disabled style="width: 150px; height: 50px;">u bent al ingeschreven</button>
            </form>
        @else
            <form action="/signUpForActivity" method="post">
                @csrf
                <input type="hidden" name="activityId" value="{{$activ->ID}}">
                <input type="hidden" name="userId" value="{{\Illuminate\Support\Facades\Auth::user()->id}}">
                <button class="btn btn-primary" type="submit" style="width: 150px; height: 50px;">Aanmelden</button>
            </form>
        @endif
    </div>
@endsection
