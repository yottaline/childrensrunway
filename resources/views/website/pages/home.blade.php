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
    <div>
        <div class="box py-5 bg-dark d-flex flex-column" style="background-image: url({{ asset('assets/img/home/1.jpeg') }})">
            <div class="container px-5 text-white my-auto">
                <p class="h1 fw-bold">9 to 11 January 2025</p>
                <p class="h3 fw-bold">
                    Hôtel Marcel Dassault<br>
                    7, Rond-Point des Champs-Elysées Marcel Dassault<br>
                    75008 Paris , France
                </p>
            </div>
            <div class="text-end px-4">
                <a href="/exhibit" class="btn btn-dark rounded-0 mx-3 px-5 text-uppercase btn-lg">Exhibit</a>
                <a href="/visit" class="btn btn-dark rounded-0 mx-3 px-5 text-uppercase btn-lg">Visit</a>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-8 box py-5 bg-dark d-flex flex-column"
                    style="background-image: url({{ asset('assets/img/home/2.jpeg') }})"></div>
                <div class="col-12 col-sm-4 d-flex flex-column">
                    <p class="my-auto py-5">
                        Children’s Runway brings together the world's leading children’s fashion brands in one
                        spectacular
                        event.
                        Hosted in the heart of Paris, the global capital of fashion, this tradeshow promises to be a
                        breathtaking
                        showcase of style, creativity and innovation
                    </p>
                </div>
            </div>
        </div>
        <div class="box" style="background-image: url({{ asset('assets/img/home/3.jpeg') }}); filter: contrast(1.2)">
        </div>
        <div class="box" style="background-image: url({{ asset('assets/img/home/5.jpeg') }})"></div>
        <div class="box" style="background-image: url({{ asset('assets/img/home/4.jpeg') }})"></div>
    </div>
@endsection
