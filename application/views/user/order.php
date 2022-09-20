<main id="main">
    <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
        <div class="container-xl px-4">
            <div class="page-header-content">
                <div class="row align-items-center justify-content-between pt-3">
                    <div class="col-auto mb-3">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="user"></i></div>
                            Order
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
        <hr class="mt-0 mb-6" />
        <div>
            <form action="" method="post">
                <input type="email" name="email"><input type="submit" value="search">
            </form>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-4">
                <!-- Billing card 1-->
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="assets/img/poster.jpg" class="img-fluid card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Team A vs Team B</h5>
                                <p class="card-text">jhvhjvhjvjhvbjhbdaskjdbjknckjzbcusadjahdags</p>
                                <button class="btn btn-enter" type="button">Prof of payment</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <!-- Billing card 2-->
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="assets/img/poster.jpg" class="img-fluid card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Team C vs Team D</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                                <button class="btn btn-enter" type="button">Prof of payment</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <!-- Billing card 3-->
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="assets/img/poster.jpg" class="img-fluid card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Team E vs Team F</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                                <button class="btn btn-enter" type="button">Prof of payment</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main><!-- End #main -->