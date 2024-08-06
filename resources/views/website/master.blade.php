<!DOCTYPE html>
<html lang="en" dir="ltr">
@include('website.inc.head')

<body class="h-100">
    @include('website.inc.header')
    <div class="d-flex flex-column h-100">
        @yield('contents')
    </div>
    @include('website.inc.footer')
    @yield('js')
</body>

</html>
