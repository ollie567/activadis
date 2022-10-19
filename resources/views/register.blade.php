@extends('layout')

@section('content')
    <?php
    $register = DB::table('activity_registrations')->where('activityId', $_GET['id'])->get();
    $activiteiten = DB::table('activiteiten')->where('ID', $_GET['id'])->get();

    ?>
    <div class="album py-5 bg-light">
        <div class="container">
    <div class="row">
<table class="table text-center">
    <thead class="thead-dark">
        <th>Activiteit</th>
        <th>Gebruikersnaam</th>
    </thead>
    <tbody class="table-group-divider">
    @foreach($register as $activ)

        <input type="hidden" value="{{$users = DB::table('users')->where('id', $activ->userId)->get()}}">


        <tr>
            @foreach($activiteiten as $evenement)
            <td>{{$evenement->activiteitnaam}}</td>
            @endforeach
            @foreach($users as $user)
                    <td>{{$user->name}}</td>
                @endforeach
        </tr>
    @endforeach
    </tbody>

</table>
    </div>
        </div>
    </div>
@endsection
