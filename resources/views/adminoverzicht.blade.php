@extends('layout')

@section('content')
    <h1 class="w-100 text-center m-2">Overzicht evenementen</h1>
    <div class="album py-5 bg-light">
        <div class="container">


            <div class="row">

                    <div class="col-sm-6 ">
                    <div class="attractions">
                        <a href="/adminDetail">
                            <div class="card" style="width: 100%;">
                                <img src="https://www.trackjackeurope.com/wp-content/uploads/2020/09/jetski.jpg" class="card-img-top" style="height: 400px;" alt="attraction">
                                <div class="card-body" style="height: 200px;">
                                    <h5 class="card-title">Jet ski</h5>
                                    <p class="card-text">
                                        Locatie: aan het meer  ||  incl eten: ja<br>
                                        min deelnemers: 10 || max deelnemers: 20<br>
                                        kosten: 50 || Benodigheden: rijbewijs<br>
                                        begintijd: 10:00 || eindtijd: 11:00<br>
                                        omschrijving: jet skieën.
                                    </p>


                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 ">
                    <div class="attractions">
                        <a href="/adminDetail">
                            <div class="card" style="width: 100%;">
                                <img src="https://www.vakantie-met-kinderen.com/images/patrick-waterski-twente-800.jpg" class="card-img-top" style="height: 400px;" alt="attraction">
                                <div class="card-body" style="height: 200px;">
                                    <h5 class="card-title">water skiën</h5>
                                    <p class="card-text">
                                        Locatie: aan het meer  ||  incl eten: ja<br>
                                        min deelnemers: 10 || max deelnemers: 20<br>
                                        kosten: 50 || Benodigheden: rijbewijs<br>
                                        begintijd: 10:00 || eindtijd: 11:00<br>
                                        omschrijving: water skieën.
                                    </p>


                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 ">
                    <div class="attractions">
                        <a href="/adminDetail">
                            <div class="card" style="width: 100%;">
                                <img src="https://static.nationalgeographic.nl/files/styles/image_3200/public/duiken-in-ondergelopen-park-in-oostenrijk-1649.webp?w=1600&h=900" class="card-img-top" style="height: 400px;" alt="attraction">
                                <div class="card-body" style="height: 200px;">
                                    <h5 class="card-title">duiken</h5>
                                    <p class="card-text">
                                        Locatie: aan het meer  ||  incl eten: ja<br>
                                        min deelnemers: 10 || max deelnemers: 20<br>
                                        kosten: 50 || Benodigheden: rijbewijs<br>
                                        begintijd: 10:00 || eindtijd: 11:00<br>
                                        omschrijving: duiken.
                                    </p>


                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
@endsection
