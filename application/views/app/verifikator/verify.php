<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h6 class="page-title text-custom">Verifikasi PD : <?= $opd['opd']; ?></h6>
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
                    <div class="card">
                        <div class="card-body">
                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Variable Kematangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach($variablekopd as $vkopd) : ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $vkopd['variable']; ?></td>
                                        <td>
                                            <?php if($vkopd['is_verify'] < 1) : ?>
                                                <a href="<?= base_url('verifikator/give_verif/' . $vkopd['variable_id'] . '/' . $vkopd['id'] ) ?>">
                                                    <i class="fas fa-clipboard-check" style="color: #7d7d7d"></i>
                                                </a>
                                            <?php else : ?>
                                                <i class="fas fa-clipboard-check text-success"></i>
                                            <?php endif; ?>
                                            &nbsp;
                                            <?php if ($vkopd['file_upload'] == NULL) : ?>
                                                <i class="fas fa-file-pdf" style="color: #b5a69a"></i>
                                            <?php else: ?>
                                                <a href="<?= base_url('uploads/file_pendukung/tingkat_kematangan/' . $vkopd['file_upload']) ?>" target="_blank">
                                                    <i class="fas fa-file-pdf text-danger"></i>
                                                </a>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <?php $no++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
    
    