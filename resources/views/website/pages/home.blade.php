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
            height: 40px;
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
            margin: 5px;
            transform: translateY(-16px);
            background-size: cover;
            background-position: center;
            flex-shrink: 1;
            flex-basis: 10%;
            -webkit-filter: grayscale(100%);
            filter: grayscale(100%);
            transition: all ease-in-out 400ms;
            cursor: pointer;
        }

        .box.active {
            flex-grow: 1;
            -webkit-filter: grayscale(0);
            filter: grayscale(0);
        }

        .box:nth-child(odd) {
            transform: translateX(-10px);
        }

        .box:nth-child(even) {
            transform: translateX(10px);
        }

        @media (min-width: 576px) {
            .logo {
                height: 60px;
            }

            .box {
                transform: translateX(0);
            }

            .box:nth-child(odd) {
                transform: translateY(-16px);
            }

            .box:nth-child(even) {
                transform: translateY(16px);
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
    <div class="container-fluid d-flex justify-content-center flex-column flex-sm-row mt-3 mb-5" style="height: 90%">
        <div class="box active" style="background-image: url({{ asset('assets/img/home/1.jpeg') }})" data-nxt="1"></div>
        <div class="box" style="background-image: url({{ asset('assets/img/home/2.jpeg') }})" data-nxt="2"></div>
        <div class="box" style="background-image: url({{ asset('assets/img/home/3.jpeg') }})" data-nxt="3"></div>
        <div class="box" style="background-image: url({{ asset('assets/img/home/4.jpeg') }})" data-nxt="4"></div>
        <div class="box" style="background-image: url({{ asset('assets/img/home/5.jpeg') }})" data-nxt="0"></div>
    </div>
@endsection

@section('js')
    <script>
        var timeInterval, intrval = 3000,
            current = 0,
            ngApp = angular.module('ngApp', []);
        ngApp.controller('ngCtrl', function($scope) {

        });

        $(function() {
            timeInterval = setTimeout(scroll, intrval);

            $('.box').on('click', function() {
                $('.box').removeClass('active');
                $(this).addClass('active');
                current = $(this).index();
                clearTimeout(timeInterval);
                timeInterval = setTimeout(scroll, intrval);
            });
        });

        function scroll() {
            timeInterval = setTimeout(scroll, intrval);
            current = $('.active').data('nxt');
            $('.box').removeClass('active').eq(current).addClass('active');
        }
    </script>
@endsection
