@extends('layout')

@section('content')
    <h1 class="w-100 text-center m-2">Overzicht evenementen</h1>
    <div class="album py-5 bg-light">
        <div class="container">
            <?php
            $id = 1;
            $activiteiten = DB::table('activiteiten')->get();
            ?>
            <div class="text-right " style="width: 100%">
                <a href="/adminActivityCreate?id=">
                    <button class="btn btn-warning">Toevoegen</button>
                </a>
            </div>

            <div class="row">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">afbeelding</th>
                            <th scope="col">title</th>
                            <th scope="col">locatie</th>
                            <th scope="col">omschrijving</th>
                            <th scope="col">deelnemers</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>



                @foreach($activiteiten as $activ)
                    <?php
                    $activiteiten = DB::table('activiteiten')->where('ID', $id)->get();
                    ?>
                        <tbody class="table-group-divider">
                            <tr>
                                <td><img src="{{$activ->activiteitafbeelding}}" class="card-img-top" style="height: 120px; width: 200px;" alt="attraction"></td>
                                <td>{{$activ->activiteitnaam}}</td>
                                <td>{{$activ->activiteitlocatie}}</td>
                                <td>{{$activ->activeitomschrijving}}</td>
                                <td>
                                    <a href="/register?id={{$activ->ID}}">
                                        <button class="btn btn-primary">Inschrijvingen</button>
                                    </a>
                                </td>
                                <td><a href="/userActivityDetail?id={{$activ->ID}}"><button class="btn btn-primary" type="submit">info</button></a></td>
                                <td><a href="/adminActivityUpdate?id={{$activ->ID}}"><button class="btn btn-secondary" type="submit">aanpassen</button></a></td>
                                <td>
                                    <form action="/activiteit/delete">
                                        <input type="hidden" value="{{$activ->ID}}" name="id">
                                        <button type="submit" class="btn btn-danger">verwijder</button>
                                    </form>
                                </td>

                            </tr>
                        </tbody>


                    <?php $id++ ?>
                @endforeach

            </table>

            <div class="d-flex justify-content-between" style="width: 100%">
                <button class="btn btn-primary" type="submit">vorige</button>
                <button class="btn btn-primary" type="submit">volgende</button>
            </div>

                            {{--
                                            Locatie: {{$activ->activiteitlocatie}}  ||  incl eten: {{$eten}} <br>
                                            min deelnemers: {{$activ->activiteitmindeelnemers}}  || max deelnemers: {{$activ->activiteitmaxdeelnemers}} <br>
                                            kosten: ???{{$activ->activiteitkosten}}  || Benodigheden: {{$activ->activiteitbenodigheden}} <br>
                                            begintijd: {{$activ->activiteitbegintijd}}  || eindtijd: {{$activ->activiteiteindtijd}} <br> --}}


            </div>
@endsection
