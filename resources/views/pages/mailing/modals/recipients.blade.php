<!-- sample modal content -->
<div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" data-bs-scroll="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Recipients</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">


                <input class="form-control" type="search" placeholder="Click here to Search"
                    value="{{ request('search') }}" name="search">
                <br>

                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <ol class="breadcrumb m-0">
                                <li>

                                    <img src="/avatarr.png" height="50" width="50">

                                </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


                                <li>

                                    <a href="mailto:gerald@gmail.com">gerald@gmail.com</a>
                                </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                <li>
                                    <a class="badge bg-success-subtle text-success">Sent</a>
                                </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                <li>
                                    <div class="dropdown">
                                        <button
                                            class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">

                                            {{-- <a class="dropdown-item" href=""><img src="/viewDetails.png"
                                                        height="30" width="30">Preview</a>

                                                <a class="dropdown-item" href="" data-bs-toggle="modal"
                                                    data-bs-target="#myModal"><img src="/viewDetails.png"
                                                        height="30" width="30">View Recipients</a>

                                                <a class="dropdown-item" href=""><img src="/edit.png"
                                                        height="30" width="30">Edit</a>




                                                <a class="dropdown-item" href=""><img src="/send.png"
                                                        height="30" width="30">Send
                                                </a> --}}
                                        </ul>
                                    </div>
                                </li>&nbsp;&nbsp;&nbsp;&nbsp;
                            </ol>
                        </div>
                    </div>

                </div>



            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
