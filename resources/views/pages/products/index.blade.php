<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="/logo/svg">


    <!-- DataTables -->
    <link href="/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />

    <!-- preloader css -->
    <link rel="stylesheet" href="/assets/css/preloader.min.css" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- <body data-layout="horizontal"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="/app/dashboard" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="/logo.svg" alt="" height="24">
                            </span>
                            <span class="logo-lg">
                                <img src="/logo.svg" alt="" height="24">
                            </span>
                        </a>

                        <a href="/app/dashboard" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="/logo.svg" alt="" height="24">
                            </span>
                            <span class="logo-lg">
                                <img src="/logo.svg" alt="" height="24">
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>


                </div>

                <div class="d-flex">




                    <div class="dropdown d-none d-sm-inline-block">
                        <button type="button" class="btn header-item" id="mode-setting-btn">
                            <i data-feather="moon" class="icon-lg layout-mode-dark"></i>
                            <i data-feather="sun" class="icon-lg layout-mode-light"></i>
                        </button>
                    </div>



                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon position-relative"
                            id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i data-feather="bell" class="icon-lg"></i>
                            <span class="badge bg-danger rounded-pill">5</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                            aria-labelledby="page-header-notifications-dropdown">
                            <div class="p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0"> Notifications </h6>
                                    </div>
                                    <div class="col-auto">
                                        <a href="index.html#!" class="small text-reset text-decoration-underline">
                                            Unread (3)</a>
                                    </div>
                                </div>
                            </div>
                            <div data-simplebar style="max-height: 230px;">
                                <a href="index.html#!" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <img src="/assets/images/users/avatar-3.jpg"
                                                class="rounded-circle avatar-sm" alt="user-pic">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">James Lemire</h6>
                                            <div class="font-size-13 text-muted">
                                                <p class="mb-1">It will seem like simplified English.</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>1 hour
                                                        ago</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                            </div>
                            <!-- <div class="p-2 border-top d-grid">
                                    <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                        <i class="mdi mdi-arrow-right-circle me-1"></i> <span>View More..</span>
                                    </a>
                                </div> -->
                        </div>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item right-bar-toggle me-2">
                            <i data-feather="settings" class="icon-lg"></i>
                        </button>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item bg-light-subtle border-start border-end"
                            id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="/assets/images/users/avatar-1.jpg"
                                alt="Header Avatar">
                            <span class="d-none d-xl-inline-block ms-1 fw-medium">Shawn L.</span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item" href="apps-contacts-profile.html"><i
                                    class="mdi mdi mdi-face-man font-size-16 align-middle me-1"></i> Profile</a>
                            {{-- <a class="dropdown-item" href="auth-lock-screen.html"><i
                                    class="mdi mdi-lock font-size-16 align-middle me-1"></i> Lock Screen</a> --}}
                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item" href="{{ url('logout') }}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout

                                <form id="logout-form" action="{{ url('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </header>




        @include('layouts.menu.sidebar')


        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            @include('layouts.badge')


            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">


                        <a href="">
                            <a class="mb-sm-0 font-size-18" onclick="history.back()">
                                < Back</a>
                            </a>
                            <h2 class="text-center">The Trailblazer Products</h2><br>
                            <h6 class="text-center">See below all products of The Trailblazer</h6>




                    </div>
                    <br><br><br>
                    <!-- start page title -->

                    <div class="col-12">

                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">

                            <form method="GET" action="{{ route('filterProducts') }}">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">

                                        <li>
                                            <label>Show</label>
                                            <input class="form-control" type="text" name="search"
                                                placeholder="Click here to Search">
                                        </li>

                                        &nbsp;&nbsp;&nbsp;&nbsp;


                                        <li>
                                            <label>Show</label>
                                            <select class="form-control col-lg-10" name="show">
                                                <option selected>select your desire show</option>
                                                <option value="Today"
                                                    {{ request('show') === 'Today' ? 'selected' : '' }}>
                                                    Today
                                                </option>
                                                <option value="Yesterday"
                                                    {{ request('show') === 'Yesterday' ? 'selected' : '' }}>
                                                    Yesterday
                                                </option>
                                                <option value="LastMonth"
                                                    {{ request('show') === 'LastMonth' ? 'selected' : '' }}>
                                                    Last Month
                                                </option>
                                                <option value="Last6Months"
                                                    {{ request('show') === 'Last6Months' ? 'selected' : '' }}>Last 6
                                                    Months
                                                </option>
                                                <!-- Add other options here -->
                                            </select>
                                        </li>

                                        &nbsp;&nbsp;&nbsp;&nbsp;

                                        <li>
                                            <label>Currency</label>
                                            <select class="form-control col-lg" name="currency">
                                                <option selected>select your desire currency</option>
                                                <option value="NGN"
                                                    {{ request('currency') === 'NGN' ? 'selected' : '' }}>NGN
                                                </option>
                                                <option value="USD"
                                                    {{ request('currency') === 'USD' ? 'selected' : '' }}>USD
                                                </option>

                                            </select>
                                        </li>
                                        &nbsp;&nbsp;&nbsp;&nbsp;

                                        <li>
                                            <label>From</label>
                                            <input class="form-control" type="date" id="dateFrom"
                                                name="dateFrom" value="{{ request('dateFrom') }}">
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
                                            <button type="submit"
                                                class="form-control btn btn-primary">Filter</button>
                                        </li>
                                    </ol>
                                </div>
                            </form>


                        </div>
                    </div>

                    <!-- end page title -->





                    <br>
                    <!-- Start Product -->
                    <div class="row">


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
                                            <span class="text-muted mb-3 lh-1 d-block text-truncate">All Product</span>
                                            <h4 class="mb-3">
                                                <span class="counter-value"
                                                    data-target="{{ $countAllProducts }}">{{ $countAllProducts }}</span>
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
                                                    data-target="{{ $countisActiveProducts }}">{{ $countisActiveProducts }}</span>
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
                                            <span class="text-muted mb-3 lh-1 d-block text-truncate">Deactivate</span>
                                            <h4 class="mb-3">
                                                <span class="counter-value"
                                                    data-target="{{ $countisNotActiveProducts }}">{{ $countisNotActiveProducts }}</span>
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
                                                <span class="counter-value"
                                                    data-target="{{ $countDeleteProducts }}">{{ $countDeleteProducts }}</span>
                                            </h4>
                                        </div>

                                    </div>

                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div>

                    <!--End PRODUCT -->







                    <!-- start Table -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <ol class="breadcrumb m-0">
                                    <li>

                                        <a href="{{ route('products', ['filter' => 'all']) }}"
                                            class="form-control btn {{ $filter === 'all' ? 'btn-primary' : 'btn-secondary' }}">
                                            All
                                        </a>

                                    </li>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <li>

                                        <a href="{{ route('products', ['filter' => 'active']) }}"
                                            class="form-control btn {{ $filter === 'active' ? 'btn-primary' : 'btn-secondary' }}">
                                            Active
                                        </a>

                                    </li>&nbsp;&nbsp;&nbsp;&nbsp;

                                    <li>

                                        <a href="{{ route('products', ['filter' => 'deactivated']) }}"
                                            class="form-control btn {{ $filter === 'deactivated' ? 'btn-primary' : 'btn-secondary' }}">
                                            Deactivated
                                        </a>

                                    </li>&nbsp;&nbsp;&nbsp;&nbsp;
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->



                    <div class="table-responsive mb-4">
                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Product Link</th>
                                    <th scope="col">Product Type</th>
                                    <th scope="col">Product Price</th>
                                    <th scope="col">Date Created</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Available</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($getAllProducts as $product)
                                    @if (
                                        ($filter == 'active' && $product->Status == '1') ||
                                            ($filter == 'deactivated' && $product->Status == '2') ||
                                            $filter == 'all')
                                        <tr>
                                            <td>
                                                @if ($product->ProductCoverPicture)
                                                    <img class="rounded-circle header-profile-user"
                                                        src="{{ $product->ProductCoverPicture }}" width="30"
                                                        height="30">
                                                @else
                                                    <img class="rounded-circle header-profile-user"
                                                        src="/otherProduct.png" width="30" height="30">
                                                @endif



                                                {{ Str::limit($product->ProductName, 15) }}
                                            </td>
                                            <td><a
                                                    href="https://{{ $product->SalesPageUrl }}">{{ Str::limit($product->SalesPageUrl ?? 'N/A', 10) }}</a>
                                            </td>
                                            <td>


                                                {{ $product->ProductTypeName ?? 'N/A' }}

                                            </td>


                                            <td>NGN{{ number_format($product->OriginalPrice, 2) }}</td>
                                            <td>{{ \Carbon\Carbon::parse($product->DateCreated)->format('M jS Y, g:i A') }}
                                            </td>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    @if ($product->Status == '2')
                                                        <a class="badge bg-success-subtle text-success">Active</a>
                                                    @elseif ($product->Status == '3')
                                                        <a class="badge bg-danger-subtle text-danger">Deactivated</a>
                                                    @elseif ($product->Status == '6')
                                                        <a
                                                            class="badge bg-secondary-subtle text-secondary">Unlisted</a>
                                                    @elseif ($product->Status == '5')
                                                        <a class="badge bg-secondary-subtle text-secondary">Revoked</a>
                                                    @elseif ($product->Status == '1')
                                                        <a class="badge bg-secondary-subtle text-secondary">Draft</a>
                                                    @else
                                                        <a class="badge bg-secondary-subtle text-secondary">Flagged</a>
                                                    @endif
                                                </div>
                                            </td>

                                            <td>
                                                <div class="d-flex gap-2">
                                                    @if ($product->IsActive == 'True' || $product->IsActive == 'true')
                                                        <a class="badge bg-success-subtle text-primary">In Stock</a>
                                                    @elseif ($product->IsActive == 'False' || $product->IsActive == 'false')
                                                        <a class="badge bg-danger-subtle text-primary">Out of Stock</a>
                                                    @endif
                                                </div>
                                            </td>



                                            <td>
                                                <div class="dropdown">
                                                    <button
                                                        class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle"
                                                        type="button" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="bx bx-dots-horizontal-rounded"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        @if ($product->IsActive == 'True' || $product->IsActive == 'true')
                                                            <a class="dropdown-item"
                                                                href="/storeDeactivate/{{ $product->Id }}"><img
                                                                    src="/deactivate.png" height="30"
                                                                    width="30">Deactivate</a>
                                                        @else
                                                            <a class="dropdown-item"
                                                                href="/storeActivate/{{ $product->Id }}"><img
                                                                    src="/assignPri.png" height="30"
                                                                    width="30">Activate</a>
                                                        @endif

                                                        <a class="dropdown-item"
                                                            href="/kreatorsStore/{{ $product->Id }}"><img
                                                                src="/otherProduct.png" height="30"
                                                                width="30">View
                                                            Store</a>

                                                        <a class="dropdown-item"
                                                            href="https://{{ $product->SalesPageUrl }}"
                                                            target="_blank"><img src="/viewDetails.png"
                                                                height="30" width="30">View
                                                            Product</a>


                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach



                            </tbody>
                        </table>

                        <!-- end table -->
                    </div>


                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->





            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © {{ config('app.name', 'Laravel') }}.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by <a href="#!" class="text-decoration-underline">KreateSell</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->


    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">
            <div class="rightbar-title d-flex align-items-center p-3">

                <h5 class="m-0 me-2">Theme Customizer</h5>

                <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
            </div>

            <!-- Settings -->
            <hr class="m-0" />

            <div class="p-4">
                <h6 class="mb-3">Layout</h6>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout" id="layout-vertical"
                        value="vertical">
                    <label class="form-check-label" for="layout-vertical">Vertical</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout" id="layout-horizontal"
                        value="horizontal">
                    <label class="form-check-label" for="layout-horizontal">Horizontal</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Layout Mode</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-mode" id="layout-mode-light"
                        value="light">
                    <label class="form-check-label" for="layout-mode-light">Light</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-mode" id="layout-mode-dark"
                        value="dark">
                    <label class="form-check-label" for="layout-mode-dark">Dark</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Layout Width</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-width" id="layout-width-fuild"
                        value="fuild" onchange="document.body.setAttribute('data-layout-size', 'fluid')">
                    <label class="form-check-label" for="layout-width-fuild">Fluid</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-width" id="layout-width-boxed"
                        value="boxed" onchange="document.body.setAttribute('data-layout-size', 'boxed')">
                    <label class="form-check-label" for="layout-width-boxed">Boxed</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Layout Position</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-position" id="layout-position-fixed"
                        value="fixed" onchange="document.body.setAttribute('data-layout-scrollable', 'false')">
                    <label class="form-check-label" for="layout-position-fixed">Fixed</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-position"
                        id="layout-position-scrollable" value="scrollable"
                        onchange="document.body.setAttribute('data-layout-scrollable', 'true')">
                    <label class="form-check-label" for="layout-position-scrollable">Scrollable</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Topbar Color</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="topbar-color" id="topbar-color-light"
                        value="light" onchange="document.body.setAttribute('data-topbar', 'light')">
                    <label class="form-check-label" for="topbar-color-light">Light</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="topbar-color" id="topbar-color-dark"
                        value="dark" onchange="document.body.setAttribute('data-topbar', 'dark')">
                    <label class="form-check-label" for="topbar-color-dark">Dark</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Size</h6>

                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-default"
                        value="default" onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
                    <label class="form-check-label" for="sidebar-size-default">Default</label>
                </div>
                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-compact"
                        value="compact" onchange="document.body.setAttribute('data-sidebar-size', 'md')">
                    <label class="form-check-label" for="sidebar-size-compact">Compact</label>
                </div>
                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-small"
                        value="small" onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
                    <label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Color</h6>

                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-light"
                        value="light" onchange="document.body.setAttribute('data-sidebar', 'light')">
                    <label class="form-check-label" for="sidebar-color-light">Light</label>
                </div>
                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-dark"
                        value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')">
                    <label class="form-check-label" for="sidebar-color-dark">Dark</label>
                </div>
                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-brand"
                        value="brand" onchange="document.body.setAttribute('data-sidebar', 'brand')">
                    <label class="form-check-label" for="sidebar-color-brand">Brand</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Direction</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-direction" id="layout-direction-ltr"
                        value="ltr">
                    <label class="form-check-label" for="layout-direction-ltr">LTR</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-direction" id="layout-direction-rtl"
                        value="rtl">
                    <label class="form-check-label" for="layout-direction-rtl">RTL</label>
                </div>

            </div>

        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>


    <!-- JAVASCRIPT -->
    <script src="/assets/libs/jquery/jquery.min.js"></script>
    <script src="/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="/assets/libs/node-waves/waves.min.js"></script>
    <script src="/assets/libs/feather-icons/feather.min.js"></script>
    <!-- pace js -->
    <script src="/assets/libs/pace-js/pace.min.js"></script>

    <!-- Required datatable js -->
    <script src="/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="/assets/libs/jszip/jszip.min.js"></script>
    <script src="/assets/libs/pdfmake/build/pdfmake.min.js"></script>
    <script src="/assets/libs/pdfmake/build/vfs_fonts.js"></script>
    <script src="/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

    <!-- Responsive examples -->
    <script src="/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

    <!-- Datatable init js -->
    <script src="/assets/js/pages/datatables.init.js"></script>

    <script src="/assets/js/app.js"></script>

</body>

</html>
