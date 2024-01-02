@extends('layouts.app')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Dashboard</h4>

                        <form method="GET" action="{{ route('filterDashboard') }}">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li>
                                        <label>Show</label>
                                        <select class="form-control" name="show">

                                            <option value="Today" {{ request('show') === 'Today' ? 'selected' : '' }}>Today
                                            </option>
                                            <option value="Yesterday"
                                                {{ request('show') === 'Yesterday' ? 'selected' : '' }}>Yesterday</option>
                                            <option value="LastMonth"
                                                {{ request('show') === 'LastMonth' ? 'selected' : '' }}>Last Month</option>
                                            <option value="Last6Months"
                                                {{ request('show') === 'Last6Months' ? 'selected' : '' }}>Last 6 Months
                                            </option>
                                            <!-- Add other options here -->
                                        </select>
                                    </li>

                                    &nbsp;&nbsp;&nbsp;&nbsp;

                                    <!-- <li>
                                                                    <label>Currency</label>
                                                                    <select class="form-control" name="currency">
                                                                        <option selected>select your desire currency</option>
                                                                        <option value="NGN" {{ request('currency') === 'NGN' ? 'selected' : '' }}>NGN</option>
                                                                        <option value="USD" {{ request('currency') === 'USD' ? 'selected' : '' }}>USD</option>

                                                                    </select>
                                                                </li>
                                                                &nbsp;&nbsp;&nbsp;&nbsp; -->

                                    <li>
                                        <label>From</label>
                                        <input class="form-control" type="date" id="dateFrom" name="dateFrom"
                                            value="{{ request('dateFrom') }}">
                                    </li>
                                    &nbsp;&nbsp;&nbsp;&nbsp;

                                    <li>
                                        <label>To</label>
                                        <input class="form-control" type="date" id="dateTo" name="dateTo"
                                            value="{{ request('dateTo') }}">
                                    </li>
                                    &nbsp;&nbsp;&nbsp;&nbsp;

                                    <li>
                                        <label>.</label>
                                        <button type="submit" class="form-control btn btn-primary">Filter</button>
                                    </li>
                                </ol>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <br>
            <!-- Start All Users -->

            <div class="row">
                <div class="row">
                    <div class="col-12">

                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">All Users</h4>
                            <div class="page-title-right">
                                <label><a href="/app/allUser/dashboard">Users Dashboard</a></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <!-- card -->
                    <div class="card card-h-100">
                        <!-- card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <img src="/users.png" height="70" width="80">
                                </div>
                                <div class="col-6">

                                    <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Kreators</span>
                                    <h4 class="mb-3">
                                        <span class="counter-value"
                                            data-target="{{ $userCount }}">{{ $userCount }}</span>
                                    </h4>
                                </div>


                            </div>

                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->

                <div class="col-xl-3 col-md-6">
                    <!-- card -->
                    <div class="card card-h-100">
                        <!-- card body -->
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="/active.png" height="70" width="80">
                                </div>
                                <div class="col-6">
                                    <span class="text-muted mb-3 lh-1 d-block text-truncate">Active</span>
                                    <h4 class="mb-3">
                                        <span class="counter-value"
                                            data-target="{{ $userActiveCount }}">{{ $userActiveCount }}</span>
                                    </h4>
                                </div>

                            </div>

                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col-->

                <div class="col-xl-3 col-md-6">
                    <!-- card -->
                    <div class="card card-h-100">
                        <!-- card body -->
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="/inactive.png" height="70" width="80">
                                </div>
                                <div class="col-6">
                                    <span class="text-muted mb-3 lh-1 d-block text-truncate">Inactive</span>
                                    <h4 class="mb-3">
                                        <span class="counter-value"
                                            data-target="{{ $userInActiveCount }}">{{ $userInActiveCount }}</span>
                                    </h4>
                                </div>

                            </div>

                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->

                <div class="col-xl-3 col-md-6">
                    <!-- card -->
                    <div class="card card-h-100">
                        <!-- card body -->
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="/deleted.png" height="70" width="80">
                                </div>
                                <div class="col-6">
                                    <span class="text-muted mb-3 lh-1 d-block text-truncate"> Deactivated</span>
                                    <h4 class="mb-3">
                                        <span class="counter-value"
                                            data-target="{{ $userDeactivatedCount }}">{{ $userDeactivatedCount }}</span>
                                    </h4>
                                </div>

                            </div>

                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->
            </div>

            <!--End All Users -->


            <br>
            <!-- Start Kreators -->
            <div class="row">

                <div class="row">
                    <div class="col-12">

                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Kreators</h4>
                            <div class="page-title-right">
                                <label><a href="/app/allKreators/dashboard">Kreator's Dashboard</a></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <!-- card -->
                    <div class="card card-h-100">
                        <!-- card body -->
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="/users.png" height="70" width="80">
                                </div>

                                <div class="col-6">
                                    <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Kreators</span>
                                    <h4 class="mb-3">
                                        <span class="counter-value"
                                            data-target="{{ $getInTotalKreators }}">{{ $getInTotalKreators }}</span>
                                    </h4>
                                </div>


                            </div>

                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->

                <div class="col-xl-3 col-md-6">
                    <!-- card -->
                    <div class="card card-h-100">
                        <!-- card body -->
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="/active.png" height="70" width="80">
                                </div>
                                <div class="col-6">
                                    <span class="text-muted mb-3 lh-1 d-block text-truncate">Active</span>
                                    <h4 class="mb-3">
                                        <span class="counter-value"
                                            data-target="{{ $getInActiveKreators }}">{{ $getInActiveKreators }}</span>
                                    </h4>
                                </div>

                            </div>

                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col-->

                <div class="col-xl-3 col-md-6">
                    <!-- card -->
                    <div class="card card-h-100">
                        <!-- card body -->
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="/inactive.png" height="70" width="80">
                                </div>
                                <div class="col-6">
                                    <span class="text-muted mb-3 lh-1 d-block text-truncate">Inactive</span>
                                    <h4 class="mb-3">
                                        <span class="counter-value"
                                            data-target="{{ $inactiveProducts }}">{{ $inactiveProducts }}</span>
                                    </h4>
                                </div>

                            </div>

                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->

                <div class="col-xl-3 col-md-6">
                    <!-- card -->
                    <div class="card card-h-100">
                        <!-- card body -->
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="/deleted.png" height="70" width="80">
                                </div>
                                <div class="col-6">
                                    <span class="text-muted mb-3 lh-1 d-block text-truncate"> Deactivated</span>
                                    <h4 class="mb-3">
                                        <span class="counter-value" data-target="0">0</span>
                                    </h4>
                                </div>

                            </div>

                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->
            </div>

            <!--End Kreators -->


            <br>
            <!-- Start Affilates -->

            <div class="row">

                <div class="row">
                    <div class="col-12">

                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Affiliates</h4>
                            <div class="page-title-right">
                                <label><a href="/app/allAffiliates/dashboard">Affiliates Dashboard</a></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <!-- card -->
                    <div class="card card-h-100">
                        <!-- card body -->
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="/users.png" height="70" width="80">
                                </div>
                                <div class="col-6">
                                    <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Affiliates</span>
                                    <h4 class="mb-3">
                                        <span class="counter-value"
                                            data-target="{{ $getInTotalAffiliates }}">{{ $getInTotalAffiliates }}</span>
                                    </h4>
                                </div>


                            </div>

                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->

                <div class="col-xl-3 col-md-6">
                    <!-- card -->
                    <div class="card card-h-100">
                        <!-- card body -->
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="/active.png" height="70" width="80">
                                </div>
                                <div class="col-6">
                                    <span class="text-muted mb-3 lh-1 d-block text-truncate">Active</span>
                                    <h4 class="mb-3">
                                        <span class="counter-value"
                                            data-target="{{ $getInActiveAffiliates }}">{{ $getActiveAffiliates }}</span>
                                    </h4>
                                </div>

                            </div>

                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col-->

                <div class="col-xl-3 col-md-6">
                    <!-- card -->
                    <div class="card card-h-100">
                        <!-- card body -->
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="/inactive.png" height="70" width="80">
                                </div>
                                <div class="col-6">
                                    <span class="text-muted mb-3 lh-1 d-block text-truncate">Inactive</span>
                                    <h4 class="mb-3">
                                        <span class="counter-value"
                                            data-target="{{ $getInActiveAffiliates }}">{{ $getInActiveAffiliates }}</span>
                                    </h4>
                                </div>

                            </div>

                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->

                <div class="col-xl-3 col-md-6">
                    <!-- card -->
                    <div class="card card-h-100">
                        <!-- card body -->
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="/deleted.png" height="70" width="80">
                                </div>
                                <div class="col-6">
                                    <span class="text-muted mb-3 lh-1 d-block text-truncate"> Deactivated</span>
                                    <h4 class="mb-3">
                                        <span class="counter-value" data-target="0">0</span>
                                    </h4>
                                </div>

                            </div>

                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->
            </div>

            <!--End Affilates -->











        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection
