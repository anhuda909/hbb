<div id="layoutSidenav_content">
                <main>
                    <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
                        <div class="container-xl px-4">
                            <div class="page-header-content">
                                <div class="row align-items-center justify-content-between pt-3">
                                    <div class="col-auto mb-3">
                                        <h1 class="page-header-title">
                                            <div class="page-header-icon"><i data-feather="user-plus"></i></div>
                                            Add User
                                        </h1>
                                    </div>
                                    <div class="col-12 col-xl-auto mb-3">
                                        <a class="btn btn-sm btn-light text-primary" href="<?= base_url('C_admin/m_user') ?>">
                                            <i class="me-1" data-feather="arrow-left"></i>
                                            Back to Users List
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <!-- Main page content-->
                    <div class="container-xl px-4 mt-4">
                        <div class="row">
                            <div class="col-xl-4">
                                <!-- Profile picture card-->
                                <div class="card mb-4 mb-xl-0">
                                    <div class="card-header">Profile Picture</div>
                                    <div class="card-body text-center">
                                        <!-- Profile picture image-->
                                        <img class="img-account-profile rounded-circle mb-2" src="<?php echo base_url() ?>admin/assets/img/demo/user-placeholder.svg" alt="" />
                                        <!-- Profile picture help block-->
                                        <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                                        <!-- Profile picture upload button-->
                                        <button class="btn btn-primary" type="button">Upload new image</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <!-- Account details card-->
                                <div class="card mb-4">
                                    <div class="card-header">Account Details</div>
                                    <div class="card-body">
                                        <form>
                                            <!-- Form Row-->
                                            <div class="row gx-3 mb-3">
                                                <!-- Form Group (first name)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="inputFirstName">First name</label>
                                                    <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" value="" />
                                                </div>
                                                <!-- Form Group (last name)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="inputLastName">Last name</label>
                                                    <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="" />
                                                </div>
                                            </div>
                                            <!-- Form Group (email address)-->
                                            <div class="mb-3">
                                                <label class="small mb-1" for="inputEmailAddress">Email address</label>
                                                <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="" />
                                            </div>
                                            <!-- Form Group (Group Selection Checkboxes)-->
                                            <div class="mb-3">
                                                <label class="small mb-1">Group(s)</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" id="groupSales" type="checkbox" value="" />
                                                    <label class="form-check-label" for="groupSales">Sales</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" id="groupDevs" type="checkbox" value="" />
                                                    <label class="form-check-label" for="groupDevs">Developers</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" id="groupMarketing" type="checkbox" value="" />
                                                    <label class="form-check-label" for="groupMarketing">Marketing</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" id="groupManagers" type="checkbox" value="" />
                                                    <label class="form-check-label" for="groupManagers">Managers</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" id="groupCustomer" type="checkbox" value="" />
                                                    <label class="form-check-label" for="groupCustomer">Customer</label>
                                                </div>
                                            </div>
                                            <!-- Form Group (Roles)-->
                                            <div class="mb-3">
                                                <label class="small mb-1">Role</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected disabled>Select a role:</option>
                                                    <option value="administrator">Administrator</option>
                                                    <option value="registered">Registered</option>
                                                    <option value="edtior">Editor</option>
                                                    <option value="guest">Guest</option>
                                                </select>
                                            </div>
                                            <!-- Submit button-->
                                            <button class="btn btn-primary" type="button">Add user</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>