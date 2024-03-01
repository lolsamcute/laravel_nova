@extends('layouts.app')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">User Roles</h4>





                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">

                                <li>

                                    <a class="form-control btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                                        + Add User</a>
                                </li>

                            </ol>
                        </div>


                    </div>
                    <p>A role provides access to predefined features so that depending on the assigned role an administrator
                        can have access to what he needs</p>
                </div>
            </div>
            <!-- end page title -->

            <br><br>

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">

                        <form method="GET" action="/inventory/filter" id="filter-form">

                            <ol class="breadcrumb m-0">

                                <li>
                                    <label>Search</label>
                                    <input class="form-control" type="search" placeholder="Click here to Search"
                                        value="{{ request('search') }}" name="search">
                                </li>&nbsp;&nbsp;&nbsp;&nbsp;

                                <li>
                                    <label>Show</label>
                                    <select class="form-control col-" name="show">
                                        <option>select your desire show</option>
                                        <option selected>Today</option>

                                    </select>
                                </li>&nbsp;&nbsp;&nbsp;&nbsp;

                                <li>
                                    <label>Currency</label>
                                    <select class="form-control" name="currency">
                                        <option>select your desire currency</option>
                                        <option selected>NGN</option>

                                    </select>
                                </li>&nbsp;&nbsp;&nbsp;&nbsp;


                                <li>
                                    <label>From</label>
                                    <input class="form-control" type="date" value="2021-07-22" id="dateFrom"
                                        value="{{ request('dateFrom') }}" name="dateFrom">
                                </li>&nbsp;&nbsp;&nbsp;&nbsp;

                                <li>
                                    <label>To</label>
                                    <input class="form-control" value="2021-07-22" type="date" id="dateTrom"
                                        value="{{ request('dateTrom') }}" name="dateTrom">
                                </li>&nbsp;&nbsp;&nbsp;&nbsp;

                                <li>
                                    <label>.</label>
                                    <a class="form-control btn btn-primary"> Filter</a>
                                </li>



                            </ol>

                        </form>

                    </div>
                </div>
            </div>
            <!-- end page title -->


            <br>
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">

                        <form method="GET" action="/inventory/filter" id="filter-form">

                            <ol class="breadcrumb m-0">

                                <li>
                                    <a class="form-control btn btn-primary">All</a>
                                </li>&nbsp;&nbsp;&nbsp;&nbsp;

                                <li>
                                    <a class="form-control btn btn-secondary">Billing</a>
                                </li>&nbsp;&nbsp;&nbsp;&nbsp;

                                <li>
                                    <a class="form-control btn btn-secondary">Technical</a>
                                </li>&nbsp;&nbsp;&nbsp;&nbsp;


                                <li>
                                    <a class="form-control btn btn-secondary">Affiliate</a>
                                </li>&nbsp;&nbsp;&nbsp;&nbsp;

                                <li>
                                    <a class="form-control btn btn-secondary">General</a>
                                </li>&nbsp;&nbsp;&nbsp;&nbsp;




                            </ol>

                        </form>

                    </div>
                </div>
            </div>
            <!-- end page title -->




            <div class="table-responsive mb-4">
                <table class="table align-middle datatable dt-responsive table-check nowrap"
                    style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email Address</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Date Added</th>
                            <th scope="col">Role</th>
                            <th scope="col">Status</th>
                            <th style="width: 80px; min-width: 80px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>


                        <tr>


                            @foreach ($users as $user)
                                <td>
                                    <img src="/assets/images/users/avatar-1.jpg" alt=""
                                        class="avatar-sm rounded-circle me-2">
                                    <a href="" class="text-body">{{ Str::limit($user->FullName, 20) }}</a>
                                </td>
                                <td>{{ $user->Email }}</td>
                                <td>{{ $user->PhoneNumber }}</td>
                                <td>{{ $user->CreatedAt }}</td>
                                <td>
                                    N/A
                                    {{-- <div class="d-flex gap-2">
                                                <a  class="badge bg-primary-subtle text-primary">
                                                        @foreach ($user->roles as $role)
                                                    <li>{{ $role->Name ?? "N/A"}}</li>
                                                @endforeach</a>

                                            </div> --}}
                                </td>

                                <td>

                                    <div class="d-flex gap-2">

                                        @if ($user->IsActive == '1')
                                            <a class="badge bg-success-subtle text-primary">Active</a>
                                        @else
                                            <a class="badge bg-danger-subtle text-primary">Deactivated</a>
                                        @endif

                                    </div>

                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button
                                            class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="/app/user/edit/profile/{ $user->Id }}"><img
                                                    src="/edit.png" height="30" width="30">Edit Profile</a>
                                            <a class="dropdown-item" data-bs-toggle="modal"
                                                data-bs-target="#myPrivilgdeModal{{ $user->Id }}"><img
                                                    src="/assignPri.png" height="30" width="30">Assign
                                                Priviledges</a>
                                            <a class="dropdown-item" href="/app/user/activities/{{ $user->Id }}"><img
                                                    src="/activities.png" height="30" width="30">Activities</a>
                                            <a class="dropdown-item" href="/app/user/deactivate/{{ $user->Id }}"><img
                                                    src="/deactivate.png" height="30" width="30">Deactivate</a>
                                        </ul>
                                    </div>
                                </td>
                        </tr>
                        @include('pages.userRoles.modals.priviledge')
                        @endforeach





                    </tbody>
                </table>
                <!-- end table -->
            </div>



            @include('pages.userRoles.modals.createUser')



        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection
