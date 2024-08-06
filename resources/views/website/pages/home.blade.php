@extends('website/master')
@section('title', 'Home')

@section('style')
    <style>
        .box {
            min-height: 350px;
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            transition: all ease-in-out 200ms;
        }


        @media (min-width: 576px) {
            .box {
                min-height: 550px;
            }
        }
    </style>
@endsection

@section('contents')
    <div class="mb-5">
        <div class="box py-5 bg-dark d-flex flex-column"
            style="background-image: url({{ asset('assets/img/home/3.jpeg') }}); filter: contrast(1.2)">
            <div class="p-5 text-white me-auto mb-auto" style="background-color: rgba(0, 0, 0, .6)">
                <p class="h5">
                    9 to 11 January 2025<br>
                    Hôtel Marcel Dassault<br>
                    7, Rond-Point des Champs-Elysées Marcel Dassault<br>
                    75008 Paris , France
                </p>
            </div>
            <div class="text-end px-4">
                <a href="/" class="btn btn-dark rounded-0 mx-3 px-5 text-uppercase btn-lg">Exhibit</a>
                <a href="/" class="btn btn-dark rounded-0 mx-3 px-5 text-uppercase btn-lg">Visit</a>
            </div>
        </div>
        <div class="box" style="background-image: url({{ asset('assets/img/home/5.jpeg') }})"></div>
        <div class="box" style="background-image: url({{ asset('assets/img/home/2.jpeg') }})"></div>
        <div class="box" style="background-image: url({{ asset('assets/img/home/4.jpeg') }})"></div>
        <div class="box" style="background-image: url({{ asset('assets/img/home/1.jpeg') }})"></div>
    </div>
@endsection
