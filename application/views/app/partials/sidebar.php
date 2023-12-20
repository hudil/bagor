<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

<div data-simplebar class="h-100" style="background-image: url('<?= base_url('assets/app/') ?>/images/sidebar.png'); height: 100%; background-position: center; background-repeat: no-repeat; background-size: cover;">

    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Main</li>

            <?php if ($this->session->userdata('role_id') == '2') : ?>
                <li>
                    <a href="<?= base_url('dashboardverif') ?>" class="waves-effect">
                        <i class="ti-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('verifikator') ?>" class=" waves-effect">
                        <i class="ti-clipboard"></i>
                        <span>Verifikator</span>
                    </a>
                </li>
                <!-- <li>
                    <a href="<?= base_url('sop') ?>" class=" waves-effect">
                        <i class="ti-cloud-up"></i>
                        <span>SOP</span>
                    </a>
                </li> -->
                <li>
                    <a href="<?= base_url('variablekopd') ?>" class=" waves-effect">
                        <i class="ti-cloud-up"></i>
                        <span>Generate</span>
                    </a>
                </li>
            <?php elseif ($this->session->userdata('role_id') == '3') : ?>
                <li>
                    <a href="<?= base_url('dashboard') ?>" class="waves-effect">
                        <i class="ti-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="<?= base_url('kematangan') ?>" class=" waves-effect">
                        <i class="ti-calendar"></i>
                        <span>Kematangan</span>
                    </a>
                </li>
                
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ti-file"></i>
                        <span>Laporan</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?= base_url('laporan/index') ?>">Mandiri</a></li>
                        <li><a href="<?= base_url('laporan/index_verif') ?>">Verifikasi Admin</a></li>
                    </ul>
                </li>
                <!-- <li>
                    <a href="<?= base_url('sop/view') ?>" class=" waves-effect">
                        <i class="ti-book"></i>
                        <span>SOP</span>
                    </a>
                </li> -->
            <?php endif; ?>

            

        </ul>
    </div>
    <!-- Sidebar -->
</div>
</div>
<!-- Left Sidebar End -->