@extends('layouts.app')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Blog Post</h4>


                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">

                                <li>

                                    <a class="form-control btn btn-primary" href="/app/blog/create">
                                        + Write new post</a>
                                </li>

                            </ol>
                        </div>


                    </div>
                    <p>View list of all blog posts and create a new one</p>
                </div>
            </div>
            <!-- end page title -->

            <br><br>

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">

                        <form method="GET" action="/filter/blog" id="filter-form">

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
                                    <label>Categories</label>
                                    <select class="form-control" name="currency">
                                        <option>select your desire categories</option>
                                        <option value="Marketing" selected>Marketing</option>

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



            <div class="row">


                @foreach ($blogs as $blog)
                    <div class="col-xl-4 col-sm-6">
                        <div class="card">
                            <div class="">

                                @if ($blog->Thumbnail)
                                    <img src="{{ $blog->Thumbnail }}" alt="{{ $blog->Thumbnail }}" class="img-fluid">
                                @else
                                    <img src="/logo.svg" alt="/logo.svg" class="img-fluid">
                                @endif

                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div>
                                            <p class="text-muted mb-2">
                                                {{ \Carbon\Carbon::parse($blog->CreatedAt)->format('M jS Y') }}</p>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="mt-4 mt-sm-0">

                                            <div class="d-flex gap-2">
                                                @if ($blog->IsVisible == true)
                                                    <h5><a class="badge bg-success-subtle">
                                                            Live
                                                        </a></h5>
                                                @elseif ($blog->IsVisible == false)
                                                    <h5><a class="badge bg-danger-subtle">Unpublished</a></h5>
                                                @elseif ($blog->Status == '3' || $blog->Status == null)
                                                    <h5><a class="badge bg-warning-subtle">Draft</a></h5>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="mt-4 mt-sm-0">

                                            <h5 class="font-size-15"> {{ $blog->Category }}</h5>
                                        </div>
                                    </div>
                                </div>


                                <h5 class=""><a href="/app/blogdetails/{{ $blog->Id }}"
                                        class="text-body">{!! $blog->Title !!}</a>
                                </h5>
                                {{-- <p class="mb-0 font-size-15"> {{ Str::limit($blog->Description, 50) }}</p> --}}

                                <div class="row">
                                    <div class="col-sm-5">
                                        <a href="/app/blogdetails/{{ $blog->Id }}"
                                            class="align-middle font-size-15">Read
                                            more <i class="mdi mdi-chevron-right"></i></a>
                                    </div>

                                    <div class="col-sm-1">
                                        <div class="mt-4 mt-sm-0">

                                        </div>
                                    </div>

                                    <div class="col-sm-6">




                                        <div class="dropdown">

                                            <img height="30" width="30" src="/like.png">{{ $blog->LikeCount }}
                                            <img height="30" width="30" src="/comment.png">{{ $countComments }}
                                            <button
                                                class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                            </button>

                                            <ul class="dropdown-menu dropdown-menu-end">

                                                <a class="dropdown-item" href="/app/blog/editBlog/{{ $blog->Id }}"><img
                                                        src="/edit.png" height="30" width="30">Edit</a>

                                                <a class="dropdown-item"
                                                    href="/app/blog/unpublish/{{ $blog->Id }}"><img
                                                        src="/unpublish.png" height="30" width="30">Unpublish</a>

                                                <a href="/app/blog/delete/{{ $blog->Id }}" class="dropdown-item"><img
                                                        src="/revoke.png" height="30" width="30">Delete
                                                </a>
                                                {{-- <a class="dropdown-item"><img src="/share.png" height="30"
                                                        width="30">Share
                                                </a> --}}
                                            </ul>


                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                @endforeach



            </div>
            <!-- end row -->

            <div class="row justify-content-center mb-4">
                <div class="col-md-3">
                    <div class="">
                        <ul class="pagination mb-sm-0">

                            {{-- Previous Page Link --}}
                            @if ($blogs->currentPage() > 1)
                                <li class="page-item">
                                    <a class="page-link" href="{{ $blogs->previousPageUrl() }}"
                                        aria-label="@lang('pagination.previous')"><i class="mdi mdi-chevron-left"></i></a>
                                </li>
                            @endif

                            {{-- Pagination Elements --}}
                            @for ($i = 1; $i <= $blogs->lastPage(); $i++)
                                <li class="page-item {{ $blogs->currentPage() === $i ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $blogs->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor

                            {{-- Next Page Link --}}
                            @if ($blogs->hasMorePages())
                                <li class="page-item">
                                    <a class="page-link" href="{{ $blogs->nextPageUrl() }}"
                                        aria-label="@lang('pagination.next')"><i class="mdi mdi-chevron-right"></i></a>
                                </li>
                            @endif

                        </ul>
                    </div>
                </div>
            </div>



            <!-- end row -->


        </div>
        <!-- end main content-->


    </div>
    <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection
