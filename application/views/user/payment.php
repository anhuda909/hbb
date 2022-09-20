<main id="main">
    <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
        <div class="container-xl px-4">
            <div class="page-header-content">
                <div class="row align-items-center justify-content-between pt-3">
                    <div class="col-auto mb-3">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="user"></i></div>
                            Setting Billing-Payment
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container-xl px-4 mt-4">
        <!-- Account page navigation-->
        <nav class="nav nav-borders">
            <a class="nav-link active" href="<?= base_url('C_user/profil') ?>">Profile</a>
            <a class="nav-link" href="<?= base_url('C_user/order') ?>">Order</a>
            <a class="nav-link" href="<?= base_url('C_user/payment') ?>">Billing</a>
        </nav>
        <hr class="mt-0 mb-4" />
        <div class="row">
            <div class="col-xl-12">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Payment Details</div>
                    <div class="card-body">
                        <form>
                            <div class="row gx-3">
                                <label class="small mb-1" for="inputOrgName">Order Number</label>
                                <input class="form-control" id="inputOrgName" type="number" placeholder="Enter your Order Number" value="Start Bootstrap" />
                            </div>
                            <div class="row gx-3">
                                <label class="small mb-1" for="inputOrgName">Username</label>
                                <input class="form-control" id="inputOrgName" type="text" placeholder="Enter your Username" value="Start Bootstrap" />
                            </div>
                            <div class="row gx-3">
                                <div class="mb-3 col-md-6">
                                    <label class="small mb-1" for="inputBillingName">Name on card</label>
                                    <input class="form-control" id="inputBillingName" type="text" placeholder="Enter the name as it appears on your card" value="Valerie Luna" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="small mb-1" for="inputBillingCCNumber">Card number</label>
                                    <input class="form-control" id="inputBillingCCNumber" type="text" placeholder="Enter your credit card number" value="4444 3333 2222 1111" />
                                </div>
                            </div>
                            <div class="row gx-3">
                                <div class="col-md-4 mb-4 mb-md-0">
                                    <label class="small mb-1" for="inputOrgName">Card expiry month</label>
                                    <input class="form-control" id="inputOrgName" type="text" placeholder="Enter expiry month" value="06" />
                                </div>
                                <div class="col-md-4 mb-4 mb-md-0">
                                    <label class="small mb-1" for="inputLocation">Card expiry year</label>
                                    <input class="form-control" id="inputLocation" type="text" placeholder="Enter expiry year" value="2024" />
                                </div>
                                <div class="col-md-4 mb-0">
                                    <label class="small mb-1" for="inputLocation">CVV Number</label>
                                    <input class="form-control" id="inputLocation" type="password" placeholder="Enter CVV number" value="111" />
                                </div>
                            </div>
                            <hr class="my-4" />
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-enter" type="button">Next</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main><!-- End #main -->