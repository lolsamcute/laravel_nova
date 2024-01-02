            <!-- Start new category Create -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            {{-- <h5 class="modal-title" id="staticBackdropLabel">Enter new category
                            </h5> --}}
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <form action="/add/category" method="POST">
                            @csrf
                            <div class="modal-body">
                                <div class="form-floating mb-3 mb-lg-0">
                                    <input type="text" name="Category" class="form-control" id="floatingInput"
                                        placeholder="Technology">
                                    <label for="floatingInput">Enter new category</label>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End new category Create -->
