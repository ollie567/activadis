@extends('layout')
@section('content')

<div class="container">

<form method="">
        @csrf
        <div class="form-group">
            <label for="name">Attractie Name</label>
            <input type="text" class="form-control" name="attractionName"
                   value="">
        </div>
        <div class="form-group">
            <label for="price">attraction description</label>
            <input type="text" class="form-control" name="attractionDescription"
                   value="">
        </div>

        <div class="form-group">
            <label for="price">link voor afbeelding attraction</label>
            <input type="text" class="form-control" name="attractionImage"
                   value="">
        </div>
        <div class="form-group">
            <label for="price">attraction locatie</label>
            <input type="text" class="form-control" name="attractionLoation"
                   value="">
        </div>
        <div class="form-group">
            <label for="price">attraction wachtijd</label>
            <input type="text" class="form-control" name="attractionWaittime"
                   value="">
        </div>
        <div class="form-group">
            <label for="price">minimale lengte zonder volwassenen</label>
            <input type="text" class="form-control" name="attractionMinLength"
                   value="">
        </div>
        <div class="form-group">
            <label for="price">minimale lengte met een volwassene</label>
            <input type="text" class="form-control" name="attractionMinLengthWithSupervisor"
                   value="">
        </div>

        <button type="submit" class="btn btn-primary mb-2">Edit activiteit</button>
      
    </form>
</div>


@endsection
