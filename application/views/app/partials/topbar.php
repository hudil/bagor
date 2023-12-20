<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="<?= base_url('dashboard') ?>" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="<?= base_url(); ?>assets/app/images/logo/sate komoh.png" alt="" height="40">
                        <span class="text-white">SATE KOMOH</span>
                    </span>
                    <span class="logo-lg">
                        <img src="<?= base_url(); ?>assets/app/images/logo/sate komoh.png" alt="" height="40">
                        <span class="text-white">SATE KOMOH</span>
                    </span>
                </a>

                <a href="<?= base_url('dashboard') ?>" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="<?= base_url(); ?>assets/app/images/logo/sate komoh.png" alt="" height="40">
                        <span class="text-white">SATE KOMOH</span>
                    </span>
                    <span class="logo-lg">
                        <img src="<?= base_url(); ?>assets/app/images/logo/sate komoh.png" alt="" height="40">
                        <span class="text-white">SATE KOMOH</span>
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="mdi mdi-menu"></i>
            </button>

            <img src="<?= base_url(); ?>assets/app/images/bagor.png" alt="" class="mt-3 mr-3" height="40">
            <img src="<?= base_url(); ?>assets/app/images/logo_berakhlak.png" alt="" class="ml-3 mt-3" height="40">
        </div>

        

        <div class="d-flex">
            <!-- <div class="dropdown d-none d-lg-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                    <i class="mdi mdi-fullscreen"></i>
                </button>
            </div> -->

            <div class="d-none d-lg-block mt-4">
                <div class="position-relative">
                    <span class="text-danger"><?= getketlogin($this->session->userdata('opd_id'), $this->session->userdata('role_id'))['role'] . ': ' . getketlogin($this->session->userdata('opd_id'), $this->session->userdata('role_id'))['opd'] ?></span>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="<?= base_url(); ?>assets/app/images/user/<?= $this->session->userdata('photo') ?>"
                        alt="Header Avatar">
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle font-size-17 align-middle me-1"></i> Profile</a>
                    <a class="dropdown-item d-flex align-items-center" href="#"><i class="mdi mdi-cog font-size-17 align-middle me-1"></i> Settings</a>
                    <!-- <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline font-size-17 align-middle me-1"></i> Lock screen</a> -->
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="<?= base_url('auth/logout') ?>"><i class="bx bx-power-off font-size-17 align-middle me-1 text-danger"></i> Logout</a>
                </div>
            </div>

        </div>
    </div>
</header>