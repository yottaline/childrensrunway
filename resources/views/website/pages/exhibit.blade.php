@extends('website/master')
@section('title', 'Exhibit')
@section('style')
    <style>
        .logo {
            filter: invert();
        }
    </style>
@endsection
@section('contents')
    <div class="container py-5" style="max-width: 800px">
        <h4 class="fw-bold text-uppercase">Exhibit</h4>
        <div class="my-5">
            <h1>You wish to join our exhibitors?</h1>
            <p class="m-0 small">Submit your application</p>
        </div>
        <form action="">
            <div class="mb-4">
                <h5 class="fw-bold mb-3">Company Data</h5>
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="companyName">Company Name<b class="text-danger">&ast;</b></label>
                            <input type="text" class="form-control form-control-sm" id="companyName" name="company_name"
                                maxlength="255" required>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6">
                        <div class="mb-3">
                            <label for="companyCountry">Country<b class="text-danger">&ast;</b></label>
                            <input type="text" class="form-control form-control-sm" id="companyCountry"
                                name="company_country" maxlength="120">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="mb-3">
                            <label for="companyCity">City<b class="text-danger">&ast;</b></label>
                            <input type="text" class="form-control form-control-sm" id="companyCity" name="company_city"
                                maxlength="120">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="companyAddress">Address<b class="text-danger">&ast;</b></label>
                            <input type="text" class="form-control form-control-sm" id="companyAddress"
                                name="company_address" maxlength="512">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="mb-3">
                            <label for="companyZip">Zip Code<b class="text-danger">&ast;</b></label>
                            <input type="text" class="form-control form-control-sm" id="companyZip" name="company_zip"
                                maxlength="24">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="mb-3">
                            <label for="companyWebsite">Website</label>
                            <input type="url" class="form-control form-control-sm" id="companyWebsite"
                                name="company_website" maxlength="120">
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <h5 class="fw-bold mb-3">Personal information</h5>
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="companyName">Company Name<b class="text-danger">&ast;</b></label>
                            <input type="text" class="form-control form-control-sm" id="companyName" name="company_name"
                                maxlength="255" required>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6">
                        <div class="mb-3">
                            <label for="companyCountry">Country<b class="text-danger">&ast;</b></label>
                            <input type="text" class="form-control form-control-sm" id="companyCountry"
                                name="company_country" maxlength="120">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="mb-3">
                            <label for="companyCity">City<b class="text-danger">&ast;</b></label>
                            <input type="text" class="form-control form-control-sm" id="companyCity" name="company_city"
                                maxlength="120">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="companyAddress">Address<b class="text-danger">&ast;</b></label>
                            <input type="text" class="form-control form-control-sm" id="companyAddress"
                                name="company_address" maxlength="512">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="mb-3">
                            <label for="companyZip">Zip Code<b class="text-danger">&ast;</b></label>
                            <input type="text" class="form-control form-control-sm" id="companyZip"
                                name="company_zip" maxlength="24">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="mb-3">
                            <label for="companyWebsite">Website</label>
                            <input type="url" class="form-control form-control-sm" id="companyWebsite"
                                name="company_website" maxlength="120">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
