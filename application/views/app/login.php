<!doctype html>
<html lang="en">

    <head>
    
        <meta charset="utf-8">
        <title>Sate Komoh | Login Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
        <meta content="Themesbrand" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?= base_url('assets/app/') ?>/images/logo/satekomohico.png">
    
        <!-- Bootstrap Css -->
        <link href="<?= base_url('assets/app/') ?>/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="<?= base_url('assets/app/') ?>/css/icons.min.css" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="<?= base_url('assets/app/') ?>/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">
    
        <style>
            .btn-custom {
                background-color: #d91919;
                color: #fff;
            }

            .btn-custom:hover {
                background-color: #b50505;
                transition: 0.7s;
            }
        </style>

    </head>

    <body class="account-pages">
        <!-- Begin page -->
        <div class="accountbg" style="background: url('<?= base_url('assets/app/') ?>/images/bg.png');background-size: cover;background-position: center;"></div>

        <div class="wrapper-page account-page-full">

            <div class="card shadow-none">
                <div class="card-block">

                    <div class="account-box">

                        <div class="card-box shadow-none p-4">
                            <div class="p-2">
                                <div class="text-center mt-4">
                                    <a href="index.html" class="logo logo-dark">
                                        <span class="logo-lg">
                                            <img src="<?= base_url('assets/app/') ?>/images/logo/satekomoh.png" alt="" height="100">
                                        </span>
                                    </a>
                    
                                    <a href="index.html" class="logo logo-light">
                                        <span class="logo-lg">
                                            <img src="<?= base_url('assets/app/') ?>/images/logo/satekomoh.png" alt="" height="100">
                                        </span>
                                    </a>
                                </div>

                                <h3 class="font-size-18 mt-5 text-center">Selamat Datang !</h3>
                                <p class="text-muted text-center">Login untuk lanjut ke aplikasi Sate Komoh.</p>

                                <?php if ($this->session->flashdata('error')) : ?>
                                    <div class="row align-items-center mt-3">
                                        <div class="col-md-12">
                                            <div class="alert alert-danger text-center" role="alert">
                                                <?= $this->session->flashdata('error') ?>.
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>

                              <form class="mt-4" action="" method="post">

                                <div class="mb-3">
                                    <label class="form-label" for="username">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" value="<?= set_value('username') ?>">
                                    <small><i class="text-danger"><?= form_error('username'); ?></i></small>
                                </div>
    

                                <div class="mb-3">
                                    <label class="form-label" for="userpassword">Password</label>
                                    <input type="password" class="form-control" id="userpassword" name="password" placeholder="Enter password">
                                    <small><i class="text-danger"><?= form_error('password'); ?></i></small>
                                </div>
    
                                <div class="mb-3 row">
                                    <div class="col-sm-6">
                                        
                                    </div>
                                    <div class="col-sm-6 text-end">
                                        <button type="submit" class="btn btn-custom w-md waves-effect waves-light" type="submit">Log In</button>
                                    </div>
                                </div>

                            </form>

                            <div class="mt-5 pt-4 text-center">
                                <p>© 2023 Bagor <span class="d-none d-sm-inline-block"> - Crafted with <i class="mdi mdi-code-tags text-danger"></i> by Bagor</span></p>
                            </div>

                        </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    

                <!-- JAVASCRIPT -->
                <script src="<?= base_url('assets/app/') ?>/libs/jquery/jquery.min.js"></script>
                <script src="<?= base_url('assets/app/') ?>/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
                <script src="<?= base_url('assets/app/') ?>/libs/metismenu/metisMenu.min.js"></script>
                <script src="<?= base_url('assets/app/') ?>/libs/simplebar/simplebar.min.js"></script>
                <script src="<?= base_url('assets/app/') ?>/libs/node-waves/waves.min.js"></script>


        <script src="<?= base_url('assets/app/') ?>/js/app.js"></script>

    </body>
</html>
