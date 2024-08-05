@extends('index')
@section('title', 'VISITORS')
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
                        {{-- <div class="mb-3">
                            <label for="statusFilter">visitors Code</label>
                            <input type="text" id="code-filter" class="form-control">
                        </div> --}}
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-8 col-lg-9">
                <div class="card card-box">
                    <div class="card-body">
                        <div class="d-flex">
                            <h5 class="card-title fw-semibold pt-1 me-auto mb-3 text-uppercase">VISITORS</h5>
                            <div>
                                <button type="button" class="btn btn-outline-dark btn-circle bi bi-arrow-repeat"
                                    ng-click="load(true)"></button>
                            </div>
                        </div>

                        <div ng-if="list.length" class="table-responsive">
                            <table class="table table-hover" id="example">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th class="text-center">Visitor Name</th>
                                        <th class="text-center">Visitor Email</th>
                                        <th class="text-center">Visitor Phone</th>
                                        <th class="text-center">Approved</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr ng-repeat="visitor in list track by $index">
                                        <td ng-bind="visitor.visitor_id" class="small font-monospace text-uppercase">
                                        </td>
                                        <td ng-bind="visitor.visitor_name" class="text-center">
                                        </td>
                                        <td ng-bind="visitor.visitor_email" class="text-center">
                                        </td>
                                        <td ng-bind="visitor.visitor_phone" class="text-center">
                                        </td>
                                        <td class="text-center">
                                            <button class="btn btn-dark" ng-if="visitor.visitor_approved == 0"
                                                ng-click="approved(visitor)">Approved</button>
                                            <button class="btn btn-dark" ng-if="visitor.visitor_approved != 0"
                                                ng-click="approved(visitor)"></button>
                                        </td>
                                        <td class="col-fit">

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
                name: ['Un Available', 'Available'],
                color: ['danger', 'success']
            };

            $scope.submitting = false;
            $scope.noMore = false;
            $scope.loading = false;
            $scope.q = '';
            $scope.updatevisitors = false;
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
                    code: $('#code-filter').val(),
                    _token: '{{ csrf_token() }}'
                };

                $.post("/visitors/load", request, function(data) {

                    var ln = data.length;
                    $scope.$apply(() => {
                        $scope.loading = false;
                        $scope.noMore = ln < limit;
                        if (ln) {
                            $scope.list.push(...data);
                            $scope.last_id = data[ln - 1].visitor_id;
                        }
                    });
                }, 'json');
            }

            $scope.approved = function(visitor) {
                $.get('/visitors/approve/' + visitor.visitor_id, function(response) {
                    $scope.$apply(function() {
                        if (response.status) {
                            toastr.success('Approved Successfily and send mail to Visitor');
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
