@extends('index')
@section('title', 'Reatilers')
@section('search')
    <form id="nvSearch" role="search">
        <input type="search" name="q" class="form-control my-3 my-md-0 rounded-pill" placeholder="Search...">
    </form>
@endsection
@section('content')
    <div class="container-fluid" ng-app="ngApp" ng-controller="ngCtrl">
        <div class="row">
            <div class="col-12 col-sm-4 col-lg-3">
                <div class="card card-box">
                    <div class="card-body">

                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-8 col-lg-9">
                <div class="card card-box">
                    <div class="card-body">
                        <div class="d-flex">
                            <h5 class="card-title fw-semibold pt-1 me-auto mb-3 text-uppercase">RETAILERS</h5>
                            <div>
                                {{-- <button type="button" class="btn btn-outline-primary btn-circle bi bi-plus-lg"
                                    ng-click="setRetailer(false)"></button> --}}
                                <button type="button" class="btn btn-outline-dark btn-circle bi bi-arrow-repeat"
                                    ng-click="load(true)"></button>
                            </div>
                        </div>

                        <div ng-if="list.length" class="table-responsive">
                            <table class="table table-hover" id="example">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Full Name</th>
                                        <th class="text-center">Company</th>
                                        <th class="text-center">Country</th>
                                        <th class="text-center">City</th>
                                        <th class="text-center">Address</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr ng-repeat="retailer in list track by $index">
                                        <td ng-bind="retailer.retailer_id"
                                            class="text-center small font-monospace text-uppercase"></td>
                                        <td>
                                            <span class="fw-bold"> <%retailer.retailer_f_name%>
                                                <%retailer.retailer_l_name%></span><br>
                                            <small ng-if="+retailer.retailer_phone"
                                                class="me-1 db-inline-block dir-ltr font-monospace badge bg-primary">
                                                <i class="bi bi-phone me-1"></i>
                                                <span ng-bind="retailer.retailer_phone" class="fw-normal"></span>
                                            </small>
                                            <small ng-if="retailer.retailer_email"
                                                class="db-inline-block dir-ltr font-monospace badge bg-primary">
                                                <i class="bi bi-envelope-at me-1"></i>
                                                <span ng-bind="retailer.retailer_email" class="fw-normal"></span>
                                            </small>
                                        </td>
                                        <td class="text-center" ng-bind="retailer.retailer_company"></td>
                                        <td class="text-center" ng-bind="retailer.retailer_country"></td>
                                        <td class="text-center" ng-bind="retailer.retailer_city"></td>
                                        <td class="text-center" ng-bind="retailer.retailer_address"></td>

                                        <td class="col-fit">
                                            <button ng-if="!retailer.retailer_approved"
                                                class="btn btn-outline-primary btn-circle bi bi-check"
                                                ng-click="editApproved(retailer)"></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        @include('layouts.loader')

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('js')
    <script>
        var scope,
            app = angular.module('ngApp', [], function($interpolateProvider) {
                $interpolateProvider.startSymbol('<%');
                $interpolateProvider.endSymbol('%>');
            });

        app.controller('ngCtrl', function($scope) {
            $scope.statusObject = {
                name: ['Available', 'Blacked'],
                color: ['success', 'danger']
            };

            $scope.submitting = false;
            $scope.noMore = false;
            $scope.loading = false;
            $scope.q = '';
            $scope.updateRetailer = false;
            $scope.list = [];
            $scope.last_id = 0;

            $scope.jsonParse = (str) => JSON.parse(str);
            $scope.load = function(reload = false) {
                if (reload) {
                    $scope.list = [];
                    $scope.last_id = 0;
                    $scope.noMore = false;
                }

                if ($scope.noMore) return;
                $scope.loading = true;

                var request = {
                    q: $scope.q,
                    last_id: $scope.last_id,
                    limit: limit,
                    _token: '{{ csrf_token() }}'
                };

                $.post("/retailers/load", request, function(data) {

                    var ln = data.length;
                    $scope.$apply(() => {
                        $scope.loading = false;
                        if (ln) {
                            $scope.noMore = ln < limit;
                            $scope.list = data;
                            console.log(data)
                            $scope.last_id = data[ln - 1].retailer_id;
                        }
                    });
                }, 'json');
            }

            $scope.editApproved = function(retailer) {
                $.get('/retailers/approve/' + retailer.retailer_id, function(response) {
                    $scope.$apply(function() {
                        if (response.status) {
                            toastr.success('Approved Successfily and send mail to Retailer');
                        } else {
                            toastr.error('Error');
                        }
                    });
                }, 'json');
            }

            $scope.load();
            scope = $scope;
        });

        $('#nvSearch').on('submit', function(e) {
            e.preventDefault();
            scope.$apply(() => scope.q = $(this).find('input').val());
            scope.load(true);
        });
    </script>
@endsection
