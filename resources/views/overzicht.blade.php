@extends('layout')

@section('content')
    <h1 class="w-100 text-center m-2">Attracties</h1>
    <div class="album py-5 bg-light">
        <div class="container">


            <div class="row">
                    <div class="col-sm-6 ">
                        <div class="attractions">
                            <div class="card" style="width: 100%;">
                                <img src="https://www.trackjackeurope.com/wp-content/uploads/2020/09/jetski.jpg" class="card-img-top" style="height: 400px;" alt="attraction">
                                <div class="card-body" style="height: 200px;">
                                    <h5 class="card-title">Jet ski</h5>
                                    <p class="card-text">jet</p>
{{--                                    <a href="{{ route('attractieDetails' , ['attractie_id' => $data->attraction_id]) }} ">--}}
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Bekijk meer</button>
{{--                                    </a>--}}

                                </div>
                            </div>
                        </div>
                    </div>




            </div>
@endsection
