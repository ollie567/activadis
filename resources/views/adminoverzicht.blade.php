@extends('layout')

@section('content')
    <h1 class="w-100 text-center m-2">Overzicht evenementen</h1>
    <div class="album py-5 bg-light">
        <div class="container">
            <?php
            $id = 1;
            $activiteiten = DB::table('activiteiten')->get();
            ?>

            <div class="row">
                @foreach($activiteiten as $activ)
                    <?php
                    $activiteiten = DB::table('activiteiten')->where('ID', $id)->get();
                    ?>


                    @if($activ->activiteiteten = true)
                        <?php $eten = 'ja'?>
                    @else
                        <?php $eten = 'nee'?>
                    @endif
                    <div class="col-sm-6 ">
                        <div class="attractions">

                            <a href="/adminDetail?id=<?php echo $id?>">
                                <div class="card" style="width: 100%;">
                                    <img src="{{$activ->activiteitafbeelding}}" class="card-img-top" style="height: 400px;" alt="attraction">
                                    <div class="card-body" style="height: 200px;">
                                        <h5 class="card-title">{{$activ->activiteitnaam}}</h5>
                                        <p class="card-text">
                                            omschrijving: {{$activ->activeitomschrijving}}
                                            Locatie: {{$activ->activiteitlocatie}}  ||  incl eten: {{$eten}} <br>
                                            min deelnemers: {{$activ->activiteitmindeelnemers}}  || max deelnemers: {{$activ->activiteitmaxdeelnemers}} <br>
                                            kosten: €{{$activ->activiteitkosten}}  || Benodigheden: {{$activ->activiteitbenodigheden}} <br>
                                            begintijd: {{$activ->activiteitbegintijd}}  || eindtijd: {{$activ->activiteiteindtijd}} <br>




                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>

                    <?php $id++ ?>
                @endforeach

                <div class="col-sm-6 ">
                    <div class="attractions">
                        <a href="/adminDetail?id=">
                            <div class="card" style="width: 100%;">
                                <img src="https://cdn-icons-png.flaticon.com/512/25/25340.png?w=360&h=" class="card-img-top" style="height: 400px;" alt="attraction">

                                <div class="card-body" style="height: 200px;">
                                    <h1 class="card-title">add new</h1>



                                </div>
                            </div>
                        </a>
                    </div>
                </div>



            </div>
@endsection
