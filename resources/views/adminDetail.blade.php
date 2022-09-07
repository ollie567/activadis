@extends('layout')
@section('content')

<div class="container">

<form method="">
        @csrf

        <div class="form-group">
            <label for="price">afbeelding link</label>
            <input type="text" class="form-control" name="attractionMinLengthWithSupervisor"
                   value="">
        </div>
        <div class="form-group">
            <label for="name">Locatie</label>
            <input type="text" class="form-control" name="attractionName"
                   value="">
        </div>
        <div class="form-group">
            <label for="price">inclusief eten </label>
            <input type="text" class="form-control" name="attractionDescription"
                   value="">
        </div>

        <div class="form-group">
            <label for="price">minimaal aantal deelnemers</label>
            <input type="text" class="form-control" name="attractionImage"
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

        <button type="submit" class="btn btn-primary mb-2">Edit activiteit</button>
      
    </form>
</div>


@endsection
