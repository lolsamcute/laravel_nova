@extends('layouts.app')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">


                <a href="">
                    <a class="mb-sm-0 font-size-18" onclick="history.back()">
                        < Back</a>
                    </a>
                    <h2 class="text-center">Admin Profile</h2><br>
                    <h6 class="text-center">See all your details as an at a glance.</h6>




            </div>
            <br><br><br>
            <!-- start page title -->


            <div class="row">
                <div class="col-lg-12">

                    <div class="row">

                        <div class="col-lg-6">
                            <div class="card text-center">
                                <br>
                                <h6>Affiliate Admin</h6><br>
                                <div class="mt-8 text-center">
                                    <img src="/assets/images/users/avatar-1.jpg" height="80" width="80"
                                        class="avatar-sm rounded-circle me-2">
                                </div>
                                <h3>{{ $user->FullName ?? 'N/A' }}</h3>
                                <h6>{{ $user->Email }}</h6>
                                <h6>{{ $user->PhoneNumber }}</h6>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-6 mx-auto">
                                        <button class="btn btn-outline-success waves-effect waves-light">Edit
                                            profile</button>
                                        <button class="btn btn-outline-danger waves-effect waves-light">Deactivate</button>
                                    </div>
                                </div><br>
                            </div>
                        </div>


                        <div class="col-lg-6">
                            <div class="card">
                                <div class="mt-8 text-center">
                                    <br>
                                    <h6>Privileges</h6><br>
                                    <div class="col-lg-12 text-center">
                                        <div class="alert alert-light" role="alert">
                                            Reply to Affiliates Issues (Money, links and General Affiliate Issues)
                                        </div>
                                        <div class="alert alert-light" role="alert">
                                            Enable payment gateway for Kreators (Crypto, Stripe, and Paypal)
                                        </div>
                                    </div>



                                    <button class="btn btn-outline-primary waves-effect waves-light">Edit
                                        Privileges</button><br><br>


                                </div>
                            </div>



                        </div>





                    </div>
                    <!-- end col -->


                </div> <!- <div class="table-responsive mb-4">

                    <p>Activities</p>
                    <table class="table align-middle datatable dt-responsive table-check nowrap"
                        style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                        <thead>
                            <tr>
                                <th scope="col">Activities</th>
                                <th scope="col">Customer Email</th>
                                <th scope="col">Customer Name</th>
                                <th scope="col">Date</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>


                            <tr>




                                <td>Reply to ticktt</td>
                                <td>yusufrif@gmail.com</td>
                                <td>Adebola Mary</td>
                                <td>
                                    Jun 12th 2021, 3:50PM
                                </td>

                                <td>

                                    <div class="d-flex gap-2">


                                        <a class="badge bg-success-subtle text-success">Completed</a>


                                    </div>

                                </td>

                            </tr>







                        </tbody>
                    </table>
                    <!-- end table -->
            </div>


        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection
