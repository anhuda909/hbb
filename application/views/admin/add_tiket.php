<div id="layoutSidenav_content">
                <main>
                    <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
                        <div class="container-xl px-4">
                            <div class="page-header-content">
                                <div class="row align-items-center justify-content-between pt-3">
                                    <div class="col-auto mb-3">
                                        <h1 class="page-header-title">
                                            <div class="page-header-icon"><i data-feather="plus-square"></i></div>
                                            Add Tiket
                                        </h1>
                                    </div>
                                    <div class="col-12 col-xl-auto mb-3">
                                        <a class="btn btn-sm btn-light text-primary" href="<?= base_url('C_admin/m_tiket') ?>">
                                            <i class="me-1" data-feather="arrow-left"></i>
                                            Back to Tiket List
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <!-- Main page content-->
                    <div class="container-xl px-4 mt-4">
                        <div class="row">
                            <div class="col-xl-12">
                                <!-- Account details card-->
                                <div class="card mb-4">
                                    <div class="card-header">Tiket Details</div>
                                    <div class="card-body">
                                        <form>
                                            <!-- Form Row-->
                                            <div class="row gx-3 mb-3">
                                                <!-- Form Group (first name)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="inputFirstName">Id Tiket</label>
                                                    <input class="form-control" id="inputFirstName" type="text" placeholder="Enter Id tiket" value="" />
                                                </div>
                                                <!-- Form Group (last name)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="inputLastName">Event</label>
                                                    <input class="form-control" id="inputLastName" type="text" placeholder="Enter event" value="" />
                                                </div>
                                            </div>
                                            <!-- Form Group (email address)-->
                                            <div class="mb-3">
                                                <label class="small mb-1" for="inputEmailAddress">Location</label>
                                                <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="" />
                                            </div>
                                            <!-- Form Group (Group Selection Checkboxes)-->
                                            <div class="mb-3">
                                                <label class="small mb-1">Date</label>
                                                <input class="form-control" id="date" type="date" value="" />
                                            </div>
                                            <!-- Form price-->
                                            <div class="mb-3">
                                                <label class="small mb-1">Price</label>
                                                <input class="form-control" id="price" type="number" placeholder="Enter price" value="" />
                                            </div>
                                            <!-- Form Group (Roles)-->
                                            <div class="mb-3">
                                                <label class="small mb-1">category</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected disabled>Select a category:</option>
                                                    <option value="administrator">Weekdays</option>
                                                    <option value="registered">Weekend</option>
                                                </select>
                                            </div>
                                            <!-- Submit button-->
                                            <button class="btn btn-primary" type="button">Add Tiket</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>