@extends('layouts.app')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Dashboard</h4>

                        <form method="GET" action="{{ route('filterAffiliatesDashboard') }}">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li>
                                        <label>Show</label>
                                        <select class="form-control" name="show">
                                            <option selected>select your desire show</option>
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
            <!-- Start Kreators -->
            <div class="row">

                <div class="row">
                    <div class="col-12">

                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Affiliates</h4>
                            <div class="page-title-right">
                                <label><a href="/app/affiliates">Affiliates Dashboard</a></label>
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
                                    <span class="text-muted mb-3 lh-1 d-block text-truncate">Deleted</span>
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







            <div class="row">
                <div class="col-xl-6">
                    <!-- card -->
                    <div class="card">
                        <!-- card body -->
                        <div class="card-body">
                            <div class="d-flex flex-wrap align-items-center mb-4">
                                <h5 class="card-title me-2">Recent Sales</h5>
                                <div class="ms-auto">
                                    <div>
                                        <button type="button" class="btn btn-soft-primary btn-sm">
                                            Last 11 Months
                                        </button>

                                    </div>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-xl-12">
                                    <div>
                                        <canvas id="myChartAffiliate" height="340x"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row-->

                <div class="col-xl-6">
                    <!-- card -->
                    <div class="card">
                        <!-- card body -->
                        <div class="card-body">





                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Recent Affilates</h4>

                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table mb-0">

                                            <thead>
                                                <tr>

                                                    <th>Customer name</th>
                                                    <th>Email Address</th>
                                                    <th>Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($getUser as $user)
                                                    <tr>
                                                        <td>{{ Str::limit($user->FullName, 10) }}</td>
                                                        <td>{{ $user->Email }}</td>
                                                        <td>{{ \Carbon\Carbon::parse($user->CreatedAt)->format('Y-m-d') }}
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->


                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Total Revenue</h4>

                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">

                                        <div class="text-center">
                                            <h1
                                                style="color: blue; font-size: 44px; display: inline-block; margin-right: 10px;">
                                                ₦{{ number_format($sumSales, 2) }}</h1>
                                            <form action="/get-filteredAffiliate" method="get" id="filter-formMe">
                                                <select class="form-control col-md-8" name="filterMe" id="filter">

                                                    <option value="SalesthisToday"
                                                        {{ request('filterMe') === 'SalesthisToday' ? 'selected' : '' }}>
                                                        Sales this Today</option>
                                                    <option value="SalesthisWeek"
                                                        {{ request('filterMe') === 'SalesthisWeek' ? 'selected' : '' }}>
                                                        Sales this Week</option>
                                                    <option value="SalesthisMonth"
                                                        {{ request('filterMe') === 'SalesthisMonth' ? 'selected' : '' }}>
                                                        Sales this Month</option>
                                                    <option value="AlltimeSales"
                                                        {{ request('filterMe') === 'AlltimeSales' ? 'selected' : '' }}>All
                                                        time Sales</option>
                                                </select>
                                            </form>

                                            <script>
                                                // Add event listener to the filter dropdown
                                                const filterDropdown = document.getElementById('filter');
                                                filterDropdown.addEventListener('change', () => {
                                                    // Submit the form when the dropdown selection changes
                                                    document.getElementById('filter-formMe').submit();
                                                });
                                            </script>

                                        </div>


                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->






                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row-->








        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script type="text/javascript">
        var labels = {!! json_encode($labels) !!};
        var users = {!! json_encode($data) !!};

        const data = {
            labels: labels,
            datasets: [{
                label: 'Recent Sales',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: users,
            }]
        };

        const config = {
            type: 'line',
            data: data,
            options: {}
        };

        const myChart = new Chart(
            document.getElementById('myChartAffiliate'),
            config
        );
    </script>
@endsection
