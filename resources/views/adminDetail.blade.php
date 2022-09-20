@extends('layout')
@section('content')

<div class="container">
    <?php
    if ($_GET['id'] == null)
    {

    ?>
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
        <?php
        }
        else{
        $detail = DB::table('activiteiten')->where('ID', $_GET['id'])->get();

        ?>
        @foreach($detail as $activ)

            <form action="/activiteit/delete" method="get">
                @csrf
                <input type="hidden" value="{{$activ->ID}}" name="id">
                <div class="form-group">
                    <label for="price">afbeelding link</label>
                    <input type="text" class="form-control" name="afbeelding" required
                           value="{{$activ->activiteitafbeelding}}">
                </div>
                <div class="form-group">
                    <label for="price">Naam</label>
                    <input type="text" class="form-control" name="naam" required
                           value="{{$activ->activiteitnaam}}">
                </div>
                <div class="form-group">
                    <label for="name">Locatie</label>
                    <input type="text" class="form-control" name="locatie" required
                           value="{{$activ->activiteitlocatie}}">
                </div>
                <div class="form-group">
                    <label for="price">inclusief eten </label>
                    <input type="text" class="form-control" name="attractionDescription" required
                           value="{{$activ->activeiteten}}">
{{--                              value="<?php echo $eten?> ">--}}
                </div>

                <div class="form-group">
                    <label for="price">minimaal aantal deelnemers</label>
                    <input type="text" class="form-control" name="attractionImage" required
                           value="{{$activ->activiteitmindeelnemers}}">
                </div>
                <div class="form-group">
                    <label for="price">max deelnemers</label>
                    <input type="text" class="form-control" name="attractionLoation" required
                           value="{{$activ->activiteitmaxdeelnemers}}">
                </div>
                <div class="form-group">
                    <label for="price">kosten</label>
                    <input type="text" class="form-control" name="attractionWaittime" required
                           value="{{$activ->activiteitkosten}}">
                </div>
                <div class="form-group">
                    <label for="price">benodigenheden</label>
                    <input type="text" class="form-control" name="attractionMinLength"
                           value="{{$activ->activiteitbenodigheden}}">
                </div>
                <div class="form-group">
                    <label for="price">begintijd</label>
                    <input type="text" class="form-control" name="attractionMinLengthWithSupervisor" required
                           value="{{$activ->activiteitbegintijd}}">
                </div>
                <div class="form-group">
                    <label for="price">eindtijd</label>
                    <input type="text" class="form-control" name="attractionMinLengthWithSupervisor" required
                           value="{{$activ->activiteiteindtijd}}">
                </div>
                <div class="form-group">
                    <label for="price">omschrijving</label>
                    <input type="text" class="form-control" name="attractionMinLengthWithSupervisor" required
                           value="{{$activ->activeitomschrijving}}">
                </div>

                <button type="submit" class="btn btn-primary mb-2">Edit activiteit</button>

            </form>
        @endforeach
        <?php

        }

        ?>
</div>


@endsection
