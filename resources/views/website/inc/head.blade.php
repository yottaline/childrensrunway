<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    {{-- <link rel="icon" type="image/png" href="/favico.png" /> --}}
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Children's Runway | @yield('title')</title>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <link href="//cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="//cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css" />

    <script src="//cdn.jsdelivr.net/gh/yottaline/helpers/js/custom_functions.js?v=1.1.0"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js"></script>
    {{-- <script src="{{ asset('/assets/js/jquery_validator/extend.js?v=1.1.0') }}"></script> --}}

    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular-sanitize.js"></script>
    <script src="//cdn.jsdelivr.net/gh/yottaline/helpers/js/ng_functions.js?v=1.4.0"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js"></script>
    <script src="//cdn.jsdelivr.net/gh/yottaline/helpers/js/jquery_validator/extend.js?v=1.1.0"></script>

    <link rel="stylesheet" href="{{ asset('/assets/css/style.css?v=1.0.0') }}">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;700&display=swap');

        body {
            font-family: "Cormorant Garamond", serif;
            font-style: normal;
            font-size: 18px;
        }

        .logo {
            display: block;
            height: 30px;
            margin-bottom: 10px;
            background-position: center;
            background-size: contain;
            background-repeat: no-repeat;
            filter: invert();
            background-image: url({{ asset('assets/img/logo_paris_dark.jpeg') }});
        }

        header .list-inline-item:not(:last-child) {
            margin-right: 15px;
        }

        @media (min-width: 576px) {
            .logo {
                height: 40px;
            }
        }
    </style>
    @yield('style')
</head>
