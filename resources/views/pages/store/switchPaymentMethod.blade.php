@extends('layouts.app')
<style>
    .page-content {
        padding: 20px;
        /* Adjust padding as needed */
    }

    .text-center {
        text-align: center;
    }

    .mb-3 {
        margin-bottom: 1rem;
    }

    .form-select {
        position: relative;
        left: 62.55px;
        top: 13px;
        font-size: 16px;
        width: 116px;
        height: 40px;
        /* Adjust height as needed */
    }

    .form-check {
        display: flex;
        align-items: center;
        margin-bottom: 1rem;
        /* Adjust margin as needed */
    }

    .form-check-input {
        margin-right: 8px;
    }

    .form-check-label img {
        height: 80px;
        width: 250px;
    }

    .row {
        margin-top: 20px;
        /* Adjust margin as needed */
    }

    .col-md-6 {
        margin-bottom: 20px;
        /* Adjust margin as needed */
    }
</style>
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <a href="">
                    <h4 class="mb-sm-0 font-size-18">
                        < Back </h4>
                </a>
                <h2 class="text-center">Switch Payment Methods</h2>
                <br>
                <h6 class="text-center">Create your post by using your own words and content.</h6>
            </div>

            <br> <br>


            <div class="col-md-12">
                <h5 class="text-center">
                    Select the country you want to switch for
                </h5>
                <div class="position-relative">
                    <div class="col-md-6">
                        <select class="form-select">
                            <option selected value="nigeria" data-thumbnail="/nigeria.png"><img src="/nigeria.png"></option>
                            <option value="us" data-thumbnail="/us.png">United States</option>
                            <option value="ghana" data-thumbnail="/ghana.png">Ghana</option>
                            <option value="global" data-thumbnail="/global.png">Global</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="paystackRadio" name="paymentMethod" checked>
                        <label class="form-check-label" for="paystackRadio">
                            <div class="d-flex align-items-center">
                                <img src="/paystack.png" height="80" width="250" alt="Paystack">
                            </div>
                        </label>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="flutterRadio" name="paymentMethod">
                        <label class="form-check-label" for="flutterRadio">
                            <div class="d-flex align-items-center">
                                <img src="/flutter.png" height="80" width="250" alt="Flutterwave">
                            </div>
                        </label>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Page-content -->
@endsection
