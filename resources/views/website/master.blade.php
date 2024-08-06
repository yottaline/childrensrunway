<!DOCTYPE html>
<html lang="en" dir="ltr">
@include('website.inc.head')

<body ng-app="ngApp" ng-controller="ngCtrl" class="h-100">
    <div class="d-flex flex-column h-100">
        @yield('contents')
    </div>
    @include('website.inc.footer')
    @yield('js')
</body>

</html>
