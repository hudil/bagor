<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h6 class="page-title text-custom">SOP (Standart Operasional Prosedur)</h6>
                    </div>
                </div>
                <?php if ($this->session->flashdata('success')) : ?>
                    <div class="row align-items-center mt-3">
                        <div class="col-md-12">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                <i class="fas fa-check"></i> <?= $this->session->flashdata('success') ?>.
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <?php if ($this->session->flashdata('error')) : ?>
                        <div class="row align-items-center mt-3">
                            <div class="col-md-12">
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    <ul>
                                        <?php foreach($this->session->flashdata('error') as $error) : ?>
                                            <li><?= $error ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card border border-warning">
                        <div class="card-body <?= ($sop != null) ? 'mx-auto' : '' ?>">
                            <?php if($sop != NULL) : ?>
                                    <div class="_df_thumb" source="<?= base_url('uploads/sop/') . $sop['dokumen_sop'] ?>"
                                        thumb="<?= base_url('assets/app/images/coversop/SOP.jpg') ?>">
                                        2023
                                    </div>
                            <?php else : ?>
                                <div class="alert alert-success mb-0 text-center" role="alert">
                                    <h4 class="alert-heading font-18">Info dari developer!</h4>
                                    <p>Saat ini belum ada file SOP, silahkan tunggu pihak admin dari kami untuk upload file SOP. <i class="mdi mdi-arrow-up-bold text-warning"></i> </p>
                                    <p class="mb-0">Terimakasih <i class="mdi mdi-account-heart" style="color: #fa0c6f"></i>.</p>
                                </div>
                            <?php endif; ?>
                            
                        </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
    
    