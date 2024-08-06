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
            filter: brightness(0);
            background-image: url({{ asset('assets/img/logo.png') }});
        }

        .list-inline-item:not(:last-child) {
            margin-right: 15px;
        }

        .box {
            height: 350px;
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            transition: all ease-in-out 200ms;
        }


        @media (min-width: 576px) {
            .box {
                height: 550px;
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
        <ul class="list-inline my-4">
            <li class="list-inline-item"><a href="/" class="h5 link-dark">Home</a></li>
            <li class="list-inline-item"><a href="/visitor_register" class="h5 link-dark">Visit</a></li>
            <li class="list-inline-item"><a href="/exhibitor_register" class="h5 link-dark">Exhibit</a></li>
            <li class="list-inline-item"><a href="/contact" class="h5 link-dark">Contact</a></li>
        </ul>
    </header>
    <div class="mt-3 mb-5">
        <div class="box" style="background-image: url({{ asset('assets/img/home/3.jpeg') }})"></div>
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
