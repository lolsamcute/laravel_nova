<!-- sample modal content -->
<div id="myPrivilgdeModal{{ $user->Id }}" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel"
    aria-hidden="true" data-bs-scroll="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                {{-- <h5 class="modal-title" id="myModalLabel">Assign Privileges</h5> --}}
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">


                <form action="/app/user/create/newUser" method="post" enctype="">
                    @csrf
                    <div class="col-lg-12 col-md-6">
                        <div class="mb-3">
                            <label for="choices-text-remove-button" class="form-label font-size-13 text-muted">Assign
                                Priviledges</label>

                            <select class="form-control" data-trigger name="choices-multiple-default"
                                id="choices-multiple-default" placeholder="This is a placeholder" multiple>
                                <option value="Choice 1" selected>Reply to Affiliates Issue(money, links and General
                                    Affiliate Issues)</option>
                            </select>
                            <br>

                            <div class="row justify-content-end">
                                <div class="col-auto">
                                    <button type="button" class="btn btn-primary waves-effect waves-light">Assign
                                        Privilege</button>
                                </div>
                            </div>



                        </div>




                        <div class="mb-3">
                            <label for="choices-text-remove-button" class="form-label font-size-13 text-muted">Full
                                Choose a Role</label>

                            <select class="form-control" name="">
                                <option value="Choice 1" selected>Affiliate</option>
                            </select>
                            <br>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="formCheck2" checked="">
                                <label class="form-check-label" for="formCheck2">
                                    Reply to Affiliates Issue(money, links and General
                                    Affiliate Issues
                                </label>
                            </div><br>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="formCheck2" checked="">
                                <label class="form-check-label" for="formCheck2">
                                    Reply to Affiliates Issue(money, links and General
                                    Affiliate Issues
                                </label>
                            </div><br>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="formCheck2" checked="">
                                <label class="form-check-label" for="formCheck2">
                                    Reply to Affiliates Issue(money, links and General
                                    Affiliate Issues
                                </label>
                            </div><br>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="formCheck2" checked="">
                                <label class="form-check-label" for="formCheck2">
                                    Reply to Affiliates Issue(money, links and General
                                    Affiliate Issues
                                </label>
                            </div><br>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="formCheck2" checked="">
                                <label class="form-check-label" for="formCheck2">
                                    Reply to Affiliates Issue(money, links and General
                                    Affiliate Issues
                                </label>
                            </div><br>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="formCheck2" checked="">
                                <label class="form-check-label" for="formCheck2">
                                    Reply to Affiliates Issue(money, links and General
                                    Affiliate Issues
                                </label>
                            </div>
                            <br>

                            <button type="button" class="btn btn-outline-secondary waves-effect">+ Add
                                Priviledge</button>


                        </div>




                    </div>



                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
