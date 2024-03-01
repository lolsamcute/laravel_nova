<!-- sample modal content -->
<div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" data-bs-scroll="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Assign Privileges</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <h5>Fill in the details of the user you want to assign as an admin</h5>

                <form action="/app/user/create/newUser" method="post" enctype="">
                    @csrf
                    <div class="col-lg-12 col-md-6">
                        <div class="mb-3">
                            <label for="choices-text-remove-button" class="form-label font-size-13 text-muted">Role
                                Title</label>
                            <select class="form-control" name="">
                                <option value="">Enter a role title</option>
                            </select>

                        </div>
                        <div class="mb-3">
                            <label for="choices-text-remove-button" class="form-label font-size-13 text-muted">Full
                                Name</label>

                            <input class="form-control" id="choices-text-remove-button" type="text"
                                placeholder="Enter the user's full name" />
                        </div>
                        <div class="mb-3">
                            <label for="choices-text-remove-button" class="form-label font-size-13 text-muted">Phone
                                Number</label>

                            <input class="form-control" id="choices-text-remove-button" type="text"
                                placeholder="Enter the user's phone number" />
                        </div>
                        <div class="mb-3">
                            <label for="choices-text-remove-button"
                                class="form-label font-size-13 text-muted">Email</label>

                            <input class="form-control" id="choices-text-remove-button" type="text"
                                placeholder="Enter the user's email" />
                        </div>
                        <div class="mb-3">
                            <label for="choices-text-remove-button"
                                class="form-label font-size-13 text-muted"><b>Profile
                                    Picture</b> - Your profile picture</label><br>

                            <img src="/profileUpload.png" height="50" width="50">Upload a profile picture
                        </div>
                    </div>


                    <div class="modal-footer">

                        <button type="submit" class="btn btn-primary btn-lg waves-effect waves-light">Add User</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
