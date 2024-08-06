@extends('website/master')
@section('title', 'Home')

@section('style')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;700&display=swap');

        body {
            font-family: "Cormorant Garamond", serif;
            font-style: normal;
        }

        .logo {
            height: 30px;
            margin-bottom: 10px;
            background-position: center;
            background-size: contain;
            background-repeat: no-repeat;
            filter: invert();
            background-image: url({{ asset('assets/img/logo_paris_dark.jpeg') }});
        }

        .list-inline-item:not(:last-child) {
            margin-right: 15px;
        }

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

            .logo {
                height: 40px;
            }
        }
    </style>
@endsection

@section('contents')
    <header class="text-center my-4">
        <div class="logo"></div>
    </header>
    <div class="mb-5">
        <div class="box py-5 bg-dark"
            style="background-image: url({{ asset('assets/img/home/3.jpeg') }}); filter: contrast(1.2)">
            <div class="p-4 text-white me-4 mb-4" style="background-color: rgba(0, 0, 0, .6); max-width: 800px">
                <p class="h5">
                    Children's Runway brings together the world's leading children’s fashion brands in one spectacular
                    event.
                    Hosted in the heart of Paris, the global capital of fashion, this tradeshow promises to be a
                    breathtaking
                    showcase of style, creativity and innovation
                </p>
                <p class="h5">
                    9-11 January 2025<br>
                    Hôtel Marcel Dassault<br>
                    7, Rond-Point des Champs-Elysées Marcel Dassault<br>
                    75008 Paris , France
                </p>
            </div>
            <div class="text-end px-4">
                {{-- <a href="/" class="btn btn-light rounded-0 mx-3 px-5 text-uppercase btn-lg">Visit</a>
                <a href="/" class="btn btn-light rounded-0 mx-3 px-5 text-uppercase btn-lg">Exhibit</a> --}}
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="/"
                            class="h4 link-light text-uppercase text-decoration-underline">Visit</a></li>
                    <li class="list-inline-item"><a href="/"
                            class="h4 link-light text-uppercase text-decoration-underline">Exhibit</a></li>
                </ul>
            </div>
        </div>
        <div class="box" style="background-image: url({{ asset('assets/img/home/5.jpeg') }})"></div>
        <div class="box" style="background-image: url({{ asset('assets/img/home/2.jpeg') }})"></div>
        <div class="box" style="background-image: url({{ asset('assets/img/home/4.jpeg') }})"></div>
        <div class="box" style="background-image: url({{ asset('assets/img/home/1.jpeg') }})"></div>
    </div>
@endsection

@section('js')
    <script>
        var timeInterval, intrval = 3000,
            current = 0,
            ngApp = angular.module('ngApp', []);
        ngApp.controller('ngCtrl', function($scope) {

        });
    </script>
@endsection
