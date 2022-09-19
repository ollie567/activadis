@extends('layout')
@section('content')

<div class="container">
    <?php
    if ($_GET['id'] == 0)
    {
    ?>
<form method="/activiteit/add" method="post">
        @csrf

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
            <input type="text" class="form-control" name="eten"
                   value="">
        </div>

        <div class="form-group">
            <label for="price">minimaal aantal deelnemers</label>
            <input type="text" class="form-control" name="mindeelnemers"
                   value="">
        </div>
        <div class="form-group">
            <label for="price">max deelnemers</label>
            <input type="text" class="form-control" name="attractionLoation"
                   value="">
        </div>
        <div class="form-group">
            <label for="price">kosten</label>
            <input type="text" class="form-control" name="attractionWaittime"
                   value="">
        </div>
        <div class="form-group">
            <label for="price">benodigenheden</label>
            <input type="text" class="form-control" name="attractionMinLength"
                   value="">
        </div>
        <div class="form-group">
            <label for="price">begintijd</label>
            <input type="text" class="form-control" name="attractionMinLengthWithSupervisor"
                   value="">
        </div>
        <div class="form-group">
            <label for="price">eindtijd</label>
            <input type="text" class="form-control" name="attractionMinLengthWithSupervisor"
                   value="">
        </div>
        <div class="form-group">
            <label for="price">omschrijving</label>
            <input type="text" class="form-control" name="attractionMinLengthWithSupervisor"
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
            @if($activ->activiteiteten = true)
                <?php $eten = 'true'?>
            @else
                <?php $eten = 'false'?>
            @endif
            <form method="">
                @csrf

                <div class="form-group">
                    <label for="price">afbeelding link</label>
                    <input type="text" class="form-control" name="afbeelding"
                           value="{{$activ->activiteitafbeelding}}">
                </div>
                <div class="form-group">
                    <label for="price">Naam</label>
                    <input type="text" class="form-control" name="naam"
                           value="{{$activ->activiteitnaam}}">
                </div>
                <div class="form-group">
                    <label for="name">Locatie</label>
                    <input type="text" class="form-control" name="locatie"
                           value="{{$activ->activiteitlocatie}}">
                </div>
                <div class="form-group">
                    <label for="price">inclusief eten </label>
                    <input type="text" class="form-control" name="attractionDescription"
                              value="<?php echo $eten?> ">
                </div>

                <div class="form-group">
                    <label for="price">minimaal aantal deelnemers</label>
                    <input type="text" class="form-control" name="attractionImage"
                           value="{{$activ->activiteitmindeelnemers}}">
                </div>
                <div class="form-group">
                    <label for="price">max deelnemers</label>
                    <input type="text" class="form-control" name="attractionLoation"
                           value="{{$activ->activiteitmaxdeelnemers}}">
                </div>
                <div class="form-group">
                    <label for="price">kosten</label>
                    <input type="text" class="form-control" name="attractionWaittime"
                           value="{{$activ->activiteitkosten}}">
                </div>
                <div class="form-group">
                    <label for="price">benodigenheden</label>
                    <input type="text" class="form-control" name="attractionMinLength"
                           value="{{$activ->activiteitbenodigheden}}">
                </div>
                <div class="form-group">
                    <label for="price">begintijd</label>
                    <input type="text" class="form-control" name="attractionMinLengthWithSupervisor"
                           value="{{$activ->activiteitbegintijd}}">
                </div>
                <div class="form-group">
                    <label for="price">eindtijd</label>
                    <input type="text" class="form-control" name="attractionMinLengthWithSupervisor"
                           value="{{$activ->activiteiteindtijd}}">
                </div>
                <div class="form-group">
                    <label for="price">omschrijving</label>
                    <input type="text" class="form-control" name="attractionMinLengthWithSupervisor"
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
