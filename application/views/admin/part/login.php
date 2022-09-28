<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login - SB Admin Pro</title>
    <link href="<?php echo base_url() ?>admin/css/styles.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="<?php echo base_url() ?>admin/assets/img/favicon.png" />
    <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous"></script>
</head>

<body class="bg-warning">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container-xl px-4">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <!-- Basic login form-->
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header justify-content-center">
                                    <h3 class="fw-light my-4">Login</h3>
                                </div>
                                <div class="card-body">
                                    <!-- Login form-->
                                    <?= validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">', '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>') ?>
                                    <?= $this->session->flashdata('msg'); ?>
                                    <?= form_open('C_login', 'class ="user"'); ?>
                                    <!-- Form Group (email address)-->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="inputEmailAddress">Username</label>
                                        <input class="form-control" id="username" name="username" type="text" placeholder="Enter username or email" value="<?= set_value('username') ?>" />
                                    </div>
                                    <!-- Form Group (password)-->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="inputPassword">Password</label>
                                        <input class="form-control" id="password" name="password" type="password" placeholder="Enter password" />
                                    </div>
                                    <!-- Form Group (login box)-->
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <button class="btn btn-primary" type="submit">Login</button>
                                    </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center">
                                    <div class="small"><a href="<?= base_url('C_login/register') ?>">Need an account? Sign up!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="footer-admin mt-auto footer-dark">
                <div class="container-xl px-4">
                    <div class="row">
                        <div class="col-md-6 small">Copyright &copy; Your Website 2021</div>
                        <div class="col-md-6 text-md-end small">
                            <a href="#!">Privacy Policy</a>
                            &middot;
                            <a href="#!">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?php echo base_url() ?>admin/js/scripts.js"></script>
</body>

</html>