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


    <!-- preloader css -->
    <link rel="stylesheet" href="/assets/css/preloader.min.css" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />


    <!-- DataTables -->
    <link href="/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />

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
                        <a href="index.html" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="/logo.svg" alt="" height="24">
                            </span>
                            <span class="logo-lg">
                                <img src="/logo.svg" alt="" height="24">
                            </span>
                        </a>

                        <a href="index.html" class="logo logo-light">
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
        @include('layouts.notification')


        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->

        <div class="main-content">

            @include('layouts.badge')

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0 font-size-18">Settings</h4>



                            </div>
                        </div>
                    </div>
                    <!-- end page title -->


                    <div class="col-xl-12 col-lg-12 text-center">
                        <div class="card">
                            <div class="card-body">


                                <ul class="nav nav-tabs-custom card-header-tabs border-top mt-4 justify-content-center"
                                    id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link px-3 active" data-bs-toggle="tab" href="l#overview"
                                            role="tab">
                                            <h3 class="card-title mb-0">Currency</h3>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link px-3" data-bs-toggle="tab" href="#about" role="tab">
                                            <h3 class="card-title mb-0">Exchange</h3>
                                        </a>
                                    </li>
                                </ul>


                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->

                        <div class="tab-content">
                            <div class="tab-pane active" id="overview" role="tabpanel">
                                <div class="card-header">
                                    <h4 class="mb-0" style="text-align: left;">Store Currency Settings</h4>
                                    <br>
                                </div>


                                <div class="card">

                                    <div class="card-body">
                                        <h5 class=" mb-0 " style="text-align: left;">Custom store currency - Customize
                                            store currency
                                        </h5>
                                        <br>
                                        <p class="mb-2" style="text-align: left;">As a Kreator, your country’s
                                            currency is selected by default.
                                            But you can decide to turn it off if you prefer. You can other options to
                                            set the currency while adding a product through the ‘add product’ section.
                                            Any currency that you don’t select here will be automatically converted if
                                            used by your customer </p>

                                        <br><br>
                                        <h5 class=" mb-0 text-left" style="text-align: left;">Customise the currency a
                                            Kreator can add to their
                                            store</h5>
                                        <br>
                                        <div class="d-flex flex-wrap gap-2">
                                            <!-- Row 1 -->
                                            <div class="d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" id="formCheckRight1"
                                                    checked>&nbsp;&nbsp;&nbsp;
                                                <button type="button" class="btn btn-outline-secondary waves-effect">
                                                    <img src="/ngn.png" height="50" width="50"
                                                        alt="/ngn.png"> NGN
                                                </button>
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" id="formCheckRight2"
                                                    checked>&nbsp;&nbsp;&nbsp;
                                                <button type="button" class="btn btn-outline-secondary waves-effect">
                                                    <img src="/usd.png" height="50" width="50"
                                                        alt="/ngn.png"> USD
                                                </button>
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" id="formCheckRight3"
                                                    checked>&nbsp;&nbsp;&nbsp;
                                                <button type="button" class="btn btn-outline-secondary waves-effect">
                                                    <img src="/ghs.png" height="50" width="50"
                                                        alt="/ngn.png"> GHS
                                                </button>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" id="formCheckRight3"
                                                    checked>&nbsp;&nbsp;&nbsp;
                                                <button type="button" class="btn btn-outline-secondary waves-effect">
                                                    <img src="/kes.png" height="50" width="50"
                                                        alt="/kes.png"> KES
                                                </button>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" id="formCheckRight3"
                                                    checked>&nbsp;&nbsp;&nbsp;
                                                <button type="button" class="btn btn-outline-secondary waves-effect">
                                                    <img src="/zar.png" height="50" width="50"
                                                        alt="/zar.png"> ZAR
                                                </button>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" id="formCheckRight3"
                                                    checked>&nbsp;&nbsp;&nbsp;
                                                <button type="button" class="btn btn-outline-secondary waves-effect">
                                                    <img src="/tzs.png" height="50" width="50"
                                                        alt="/tzs.png"> TZS
                                                </button>
                                            </div>


                                            <!-- Next row -->
                                            <div class="d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" id="formCheckRight4"
                                                    checked>&nbsp;&nbsp;&nbsp;
                                                <button type="button" class="btn btn-outline-secondary waves-effect">
                                                    <img src="/gbp.png" height="50" width="50"
                                                        alt="/ngn.png"> GBP
                                                </button>
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" id="formCheckRight5"
                                                    checked>&nbsp;&nbsp;&nbsp;
                                                <button type="button" class="btn btn-outline-secondary waves-effect">
                                                    <img src="/lrd.png" height="50" width="50"
                                                        alt="/lrd.png"> LRD
                                                </button>
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" id="formCheckRight6"
                                                    checked>&nbsp;&nbsp;&nbsp;
                                                <button type="button" class="btn btn-outline-secondary waves-effect">
                                                    <img src="/sll.png" height="50" width="50"
                                                        alt="/sll.png"> SLL
                                                </button>
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" id="formCheckRight6"
                                                    checked>&nbsp;&nbsp;&nbsp;
                                                <button type="button" class="btn btn-outline-secondary waves-effect">
                                                    <img src="/ugx.png" height="50" width="50"
                                                        alt="/ugx.png"> UGX
                                                </button>
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" id="formCheckRight6"
                                                    checked>&nbsp;&nbsp;&nbsp;
                                                <button type="button" class="btn btn-outline-secondary waves-effect">
                                                    <img src="/mwk.png" height="50" width="50"
                                                        alt="/mwk.png"> MWX
                                                </button>
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" id="formCheckRight6"
                                                    checked>&nbsp;&nbsp;&nbsp;
                                                <button type="button" class="btn btn-outline-secondary waves-effect">
                                                    <img src="/gmd.png" height="50" width="50"
                                                        alt="/gmd.png"> GMD
                                                </button>
                                            </div>

                                        </div>

                                        <br><br>
                                        <h5 class=" mb-0" style="text-align: left;">West African CFA Franc BCEAO(XOF)
                                        </h5>
                                        <br>

                                        <div class="d-flex flex-wrap gap-2">

                                            <div class="d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" id="formCheckRight5"
                                                    checked>&nbsp;&nbsp;&nbsp;
                                                <button type="button" class="btn btn-outline-secondary waves-effect">
                                                    <img src="/beninRe.png" height="50" width="50"
                                                        alt="/beninRe.png"> Benin Republic
                                                </button>
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" id="formCheckRight6"
                                                    checked>&nbsp;&nbsp;&nbsp;
                                                <button type="button" class="btn btn-outline-secondary waves-effect">
                                                    <img src="/ivoryCoast.png" height="50" width="50"
                                                        alt="/ivoryCoast.png"> Ivory Coast
                                                </button>
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" id="formCheckRight6"
                                                    checked>&nbsp;&nbsp;&nbsp;
                                                <button type="button" class="btn btn-outline-secondary waves-effect">
                                                    <img src="/senegal.png" height="50" width="50"
                                                        alt="/senegal.png"> Senegal
                                                </button>
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" id="formCheckRight6"
                                                    checked>&nbsp;&nbsp;&nbsp;
                                                <button type="button" class="btn btn-outline-secondary waves-effect">
                                                    <img src="/mali.png" height="50" width="50"
                                                        alt="/mali.png">
                                                    Mali
                                                </button>
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" id="formCheckRight6"
                                                    checked>&nbsp;&nbsp;&nbsp;
                                                <button type="button" class="btn btn-outline-secondary waves-effect">
                                                    <img src="/togo.png" height="50" width="50"
                                                        alt="/togo.png">
                                                    Togo
                                                </button>
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" id="formCheckRight6"
                                                    checked>&nbsp;&nbsp;&nbsp;
                                                <button type="button" class="btn btn-outline-secondary waves-effect">
                                                    <img src="/burkinafaso.png" height="50" width="50"
                                                        alt="/burkinafaso.png"> Burkina Faso
                                                </button>
                                            </div>
                                        </div>
                                        <br><br><br>

                                        <h5 class=" mb-0" style="text-align: left;">Central African CFA Franc
                                            BEAC(XAF)</h5>
                                        <br>

                                        <div class="d-flex flex-wrap gap-2">

                                            <div class="d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" id="formCheckRight6"
                                                    checked>&nbsp;&nbsp;&nbsp;
                                                <button type="button" class="btn btn-outline-secondary waves-effect">
                                                    <img src="/chad.png" height="50" width="50"
                                                        alt="/chad.png"> Chad
                                                </button>
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" id="formCheckRight6"
                                                    checked>&nbsp;&nbsp;&nbsp;
                                                <button type="button" class="btn btn-outline-secondary waves-effect">
                                                    <img src="/cameroon.png" height="50" width="50"
                                                        alt="/cameroon.png"> Cameroon
                                                </button>
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" id="formCheckRight6"
                                                    checked>&nbsp;&nbsp;&nbsp;
                                                <button type="button" class="btn btn-outline-secondary waves-effect">
                                                    <img src="/gabon.png" height="50" width="50"
                                                        alt="/gabon.png"> Gabon
                                                </button>
                                            </div>



                                        </div>


                                        <button type="button"
                                            class="btn btn-lg btn-primary waves-effect waves-light">Update
                                            Details</button>

                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->





                                <div class="card">

                                    <div class="card-body">
                                        <h4 class=" mb-0" style="text-align: left;">Customer's Currency Option
                                        </h4>
                                        <br>
                                        <p class="mb-2" style="text-align: left;">There are the currencies that your
                                            customers get to see and
                                            select when they want to buy a product. Although your payouts can only be in
                                            your local currency, your store currency can be any that are listed here.
                                            Customers can pay in their local currency. </p>

                                        <br><br>
                                        <h5 class=" mb-0" style="text-align: left;">Customise the currency a Kreator
                                            can add to their
                                            store</h5>
                                        <br>
                                        <div class="d-flex flex-wrap gap-2">
                                            <!-- Row 1 -->
                                            <div class="d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" id="formCheckRight1"
                                                    checked>&nbsp;&nbsp;&nbsp;
                                                <button type="button" class="btn btn-outline-secondary waves-effect">
                                                    <img src="/ngn.png" height="50" width="50"
                                                        alt="/ngn.png"> NGN
                                                </button>
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" id="formCheckRight2"
                                                    checked>&nbsp;&nbsp;&nbsp;
                                                <button type="button" class="btn btn-outline-secondary waves-effect">
                                                    <img src="/usd.png" height="50" width="50"
                                                        alt="/ngn.png"> USD
                                                </button>
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" id="formCheckRight3"
                                                    checked>&nbsp;&nbsp;&nbsp;
                                                <button type="button" class="btn btn-outline-secondary waves-effect">
                                                    <img src="/ghs.png" height="50" width="50"
                                                        alt="/ngn.png"> GHS
                                                </button>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" id="formCheckRight3"
                                                    checked>&nbsp;&nbsp;&nbsp;
                                                <button type="button" class="btn btn-outline-secondary waves-effect">
                                                    <img src="/kes.png" height="50" width="50"
                                                        alt="/kes.png"> KES
                                                </button>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" id="formCheckRight3"
                                                    checked>&nbsp;&nbsp;&nbsp;
                                                <button type="button" class="btn btn-outline-secondary waves-effect">
                                                    <img src="/zar.png" height="50" width="50"
                                                        alt="/zar.png"> ZAR
                                                </button>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" id="formCheckRight3"
                                                    checked>&nbsp;&nbsp;&nbsp;
                                                <button type="button" class="btn btn-outline-secondary waves-effect">
                                                    <img src="/tzs.png" height="50" width="50"
                                                        alt="/tzs.png"> TZS
                                                </button>
                                            </div>


                                            <!-- Next row -->
                                            <div class="d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" id="formCheckRight4"
                                                    checked>&nbsp;&nbsp;&nbsp;
                                                <button type="button" class="btn btn-outline-secondary waves-effect">
                                                    <img src="/gbp.png" height="50" width="50"
                                                        alt="/ngn.png"> GBP
                                                </button>
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" id="formCheckRight5"
                                                    checked>&nbsp;&nbsp;&nbsp;
                                                <button type="button" class="btn btn-outline-secondary waves-effect">
                                                    <img src="/lrd.png" height="50" width="50"
                                                        alt="/lrd.png"> LRD
                                                </button>
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" id="formCheckRight6"
                                                    checked>&nbsp;&nbsp;&nbsp;
                                                <button type="button" class="btn btn-outline-secondary waves-effect">
                                                    <img src="/sll.png" height="50" width="50"
                                                        alt="/sll.png"> SLL
                                                </button>
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" id="formCheckRight6"
                                                    checked>&nbsp;&nbsp;&nbsp;
                                                <button type="button" class="btn btn-outline-secondary waves-effect">
                                                    <img src="/ugx.png" height="50" width="50"
                                                        alt="/ugx.png"> UGX
                                                </button>
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" id="formCheckRight6"
                                                    checked>&nbsp;&nbsp;&nbsp;
                                                <button type="button" class="btn btn-outline-secondary waves-effect">
                                                    <img src="/mwk.png" height="50" width="50"
                                                        alt="/mwk.png"> MWX
                                                </button>
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" id="formCheckRight6"
                                                    checked>&nbsp;&nbsp;&nbsp;
                                                <button type="button" class="btn btn-outline-secondary waves-effect">
                                                    <img src="/gmd.png" height="50" width="50"
                                                        alt="/gmd.png"> GMD
                                                </button>
                                            </div>

                                        </div>

                                        <br><br>
                                        <h5 class=" mb-0" style="text-align: left;">West African CFA Franc BCEAO</h5>
                                        <br>

                                        <div class="d-flex flex-wrap gap-2">

                                            <div class="d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" id="formCheckRight5"
                                                    checked>&nbsp;&nbsp;&nbsp;
                                                <button type="button" class="btn btn-outline-secondary waves-effect">
                                                    <img src="/beninRe.png" height="50" width="50"
                                                        alt="/beninRe.png"> Benin Republic
                                                </button>
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" id="formCheckRight6"
                                                    checked>&nbsp;&nbsp;&nbsp;
                                                <button type="button" class="btn btn-outline-secondary waves-effect">
                                                    <img src="/ivoryCoast.png" height="50" width="50"
                                                        alt="/ivoryCoast.png"> Ivory Coast
                                                </button>
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" id="formCheckRight6"
                                                    checked>&nbsp;&nbsp;&nbsp;
                                                <button type="button" class="btn btn-outline-secondary waves-effect">
                                                    <img src="/senegal.png" height="50" width="50"
                                                        alt="/senegal.png"> Senegal
                                                </button>
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" id="formCheckRight6"
                                                    checked>&nbsp;&nbsp;&nbsp;
                                                <button type="button" class="btn btn-outline-secondary waves-effect">
                                                    <img src="/mali.png" height="50" width="50"
                                                        alt="/mali.png">
                                                    Mali
                                                </button>
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" id="formCheckRight6"
                                                    checked>&nbsp;&nbsp;&nbsp;
                                                <button type="button" class="btn btn-outline-secondary waves-effect">
                                                    <img src="/togo.png" height="50" width="50"
                                                        alt="/togo.png">
                                                    Togo
                                                </button>
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" id="formCheckRight6"
                                                    checked>&nbsp;&nbsp;&nbsp;
                                                <button type="button" class="btn btn-outline-secondary waves-effect">
                                                    <img src="/burkinafaso.png" height="50" width="50"
                                                        alt="/burkinafaso.png"> Burkina Faso
                                                </button>
                                            </div>
                                        </div>
                                        <br><br><br>

                                        <h5 class=" mb-0" style="text-align: left;">Central African CFA Franc BEAC
                                        </h5>
                                        <br>

                                        <div class="d-flex flex-wrap gap-2">

                                            <div class="d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" id="formCheckRight6"
                                                    checked>&nbsp;&nbsp;&nbsp;
                                                <button type="button" class="btn btn-outline-secondary waves-effect">
                                                    <img src="/chad.png" height="50" width="50"
                                                        alt="/chad.png"> Chad
                                                </button>
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" id="formCheckRight6"
                                                    checked>&nbsp;&nbsp;&nbsp;
                                                <button type="button" class="btn btn-outline-secondary waves-effect">
                                                    <img src="/cameroon.png" height="50" width="50"
                                                        alt="/cameroon.png"> Cameroon
                                                </button>
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" id="formCheckRight6"
                                                    checked>&nbsp;&nbsp;&nbsp;
                                                <button type="button" class="btn btn-outline-secondary waves-effect">
                                                    <img src="/gabon.png" height="50" width="50"
                                                        alt="/gabon.png"> Gabon
                                                </button>
                                            </div>



                                        </div>

                                        <div class="float-start">
                                            <br>
                                            <button class="btn btn-lg btn-primary w-md waves-effect waves-light">
                                                Update
                                                Details</button>
                                        </div>


                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->


                            </div>
                            <!-- end tab pane -->

                            <div class="tab-pane" id="about" role="tabpanel">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title mb-0">Exchange Rate Settings</h3>
                                    </div>
                                    <div class="card-body">

                                        <table id="datatable"
                                            class="table table-bordered dt-responsive  nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th scope="col">FromCurrency</th>
                                                    <th scope="col">ToCurrency</th>
                                                    <th scope="col">Sell Rate</th>
                                                    <th scope="col">Buy Rate</th>
                                                    <th scope="col">Base Rate</th>
                                                    <th scope="col">Source</th>
                                                    <th scope="col">Date Created</th>
                                                    <th scope="col">Date Updated</th>
                                                    <th scope="col">Percentage Markup</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>


                                            <tbody>
                                                <tr>
                                                    <td>NGN</td>
                                                    <td>USD</td>
                                                    <td>1.0000</td>
                                                    <td>1.0000</td>
                                                    <td>1.0000</td>
                                                    <td>1</td>
                                                    <td>21/2/2002</td>
                                                    <td>21/2/2002</td>
                                                    <td>0.20000</td>
                                                    <td> <button type="button"
                                                            class="btn btn-outline-success waves-effect waves-light">Update</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>NGN</td>
                                                    <td>USD</td>
                                                    <td>1.0000</td>
                                                    <td>1.0000</td>
                                                    <td>1.0000</td>
                                                    <td>1</td>
                                                    <td>21/2/2002</td>
                                                    <td>21/2/2002</td>
                                                    <td>0.20000</td>
                                                    <td> <button type="button"
                                                            class="btn btn-outline-success waves-effect waves-light">Update</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>NGN</td>
                                                    <td>USD</td>
                                                    <td>1.0000</td>
                                                    <td>1.0000</td>
                                                    <td>1.0000</td>
                                                    <td>1</td>
                                                    <td>21/2/2002</td>
                                                    <td>21/2/2002</td>
                                                    <td>0.20000</td>
                                                    <td> <button type="button"
                                                            class="btn btn-outline-success waves-effect waves-light">Update</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>USD</td>
                                                    <td>NGN</td>
                                                    <td>1.0000</td>
                                                    <td>1.0000</td>
                                                    <td>1.0000</td>
                                                    <td>1</td>
                                                    <td>21/2/2002</td>
                                                    <td>21/2/2002</td>
                                                    <td>0.20000</td>
                                                    <td> <button type="button"
                                                            class="btn btn-outline-danger waves-effect waves-light">Updated</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>USD</td>
                                                    <td>NGN</td>
                                                    <td>1.0000</td>
                                                    <td>1.0000</td>
                                                    <td>1.0000</td>
                                                    <td>1</td>
                                                    <td>21/2/2002</td>
                                                    <td>21/2/2002</td>
                                                    <td>0.20000</td>
                                                    <td> <button type="button"
                                                            class="btn btn-outline-danger waves-effect waves-light">Updated</button>
                                                    </td>
                                                </tr>




                                            </tbody>
                                        </table>



                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end tab pane -->


                        </div>
                        <!-- end tab content -->
                    </div>
                    <!-- end col -->




                </div> <!-- container-fluid -->
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
