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
                        <h6 class="page-title text-custom">Generate</h6>
                    </div>
                </div>
            </div>
            <!-- end page title -->

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

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="<?= base_url('variablekopd/pros') ?>" method="post">
                                <label class="form-label">Tahun</label>
                                <select class="select2 form-control" name="tahun" style="border: 2px solid #FF6600;">
                                    <option readonly disabled selected>-- Pilih --</option>
                                    <?php for($tahun = 2022; $tahun <= date('Y')+1; $tahun++) : ?>
                                        <option value="<?= $tahun ?>"><?= $tahun ?></option>
                                    <?php endfor; ?>
                                </select>
                                <button type="submit" class="btn btn-success mt-3">Generate</button>
                            </form>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="alert alert-success mb-0 text-center" role="alert">
                                <h4 class="alert-heading font-18">Info dari developer!</h4>
                                <p>Halaman ini digunakan untuk generate inputan. lakukan generate 1x selama 1 tahun<i class="mdi mdi-arrow-up-bold text-warning"></i> </p>
                                <p class="mb-0">Terimakasih <i class="mdi mdi-account-heart" style="color: #fa0c6f"></i>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
    
    