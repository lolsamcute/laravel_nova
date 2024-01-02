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
            <!-- Start All Users -->

            <div class="row">
                <div class="row">
                    <div class="col-12">

                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">All Users</h4>
                            <div class="page-title-right">
                                <label><a href="/app/user">Users Dashboard</a></label>
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

            <!--End All Users -->


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
                                        <canvas id="myChart" height="260x"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->


                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Recent Users</h4>

                        </div>
                        <div class="table-responsive mb-4">
                            <table class="table align-middle dt-responsive table-check nowrap"
                                style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Customer name</th>
                                        <th>Email Address</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($getUser as $item)
                                        <tr>
                                            <td>{{ Str::limit($item->FullName, 20) }}</td>
                                            <td>{{ $item->Email }}</td>
                                            <td>{{ \Carbon\Carbon::parse($item->CreatedAt)->format('Y-m-d') }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>

                    </div>



                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Total Revenue</h4>

                        </div>
                        <div class="card-body ">
                            <div class="table-responsive">





                                <div class="text-center">
                                    <h1 style="color: blue; font-size: 44px; display: inline-block; margin-right: 10px;">
                                        ₦{{ number_format($sumSales, 2) }}</h1>
                                    <form action="/get-filtered-sales" method="get" id="filter-formMe">
                                        <select class="form-control col-md-8" name="filterMe" id="filter">

                                            <option value="SalesthisToday"
                                                {{ request('filterMe') === 'SalesthisToday' ? 'selected' : '' }}>Sales this
                                                Today</option>
                                            <option value="SalesthisWeek"
                                                {{ request('filterMe') === 'SalesthisWeek' ? 'selected' : '' }}>Sales this
                                                Week</option>
                                            <option value="SalesthisMonth"
                                                {{ request('filterMe') === 'SalesthisMonth' ? 'selected' : '' }}>Sales this
                                                Month</option>
                                            <option value="AlltimeSales"
                                                {{ request('filterMe') === 'AlltimeSales' ? 'selected' : '' }}>All time
                                                Sales</option>
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
                    document.getElementById('myChart'),
                    config
                );
            </script>
        @endsection
