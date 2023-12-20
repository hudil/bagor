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
                        <h6 class="page-title text-custom">Kematangan</h6>
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

            <!-- <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <b>Cetak PDF</b>
                            <form action="<?= base_url('kematangan/print') ?>" method="POST" class="mt-2">
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <input type="month" class="form-control" id="example-month-input" name="tahun" value="<?= date('Y-m') ?>">
                                    </div>
                                    <div class="col-4">
                                        <button type="submit" class="btn btn-success">Print</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Variable</th>
                                        <th>Tahun</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                        <th>Catatan</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach ( $variable_kematangan as $vk ) : ?>
                                    <tr>
                                        <td><?= $no ?>. </td>
                                        <td><?= $vk['variable'] ?></td>
                                        <td><?= $vk['tahun'] ?></td>

                                            <?php if ($vk['is_input'] < 1) : ?>
                                                <td>
                                                    <i class="text-danger"><small>Belum Input</small></i>
                                                </td>
                                                <td>
                                                    <a href="<?= base_url('kematangan/form/' . $vk['variable_id']) ?>"><i class="mdi mdi-pencil-plus text-danger"></i></a>
                                                </td>
                                            <?php elseif ($vk['is_input'] > 0 && $vk['is_verify'] < 1 && $vk['catatan'] == NULL) : ?>
                                                <td>
                                                    <i class="text-warning"><small>Menunggu Verify</small></i>
                                                </td>
                                                <td>
                                                    <a href="<?= base_url('kematangan/editform/' . $vk['variable_id'] . '/' . $vk['id']) ?>"><i class="mdi mdi-pencil-lock text-warning"></i></a>
                                                </td>
                                            <?php elseif ($vk['is_input'] > 0 && $vk['is_verify'] < 1 && $vk['catatan'] != NULL) : ?>
                                                <td>
                                                    <i class="text-info"><small>Perlu Perbaikan</small></i>
                                                </td>
                                                <td>
                                                    <a href="<?= base_url('kematangan/editform/' . $vk['variable_id'] . '/' . $vk['id']) ?>"><i class="mdi mdi-pen text-info"></i></a>
                                                </td>
                                            <?php else : ?>
                                                <td>
                                                    <i class="text-success"><small>Terverify</small></i>
                                                </td>
                                                <td>
                                                    <a href=""><i class="mdi mdi-check-all text-success"></i></a>
                                                </td>
                                            <?php endif; ?>
                                        <?php if ($vk['catatan'] != null) : ?>
                                            <td>
                                                <a data-catatan="<?= $vk['catatan']; ?>" class="catatan" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center"><i class="mdi mdi-book-information-variant text-warning"></i></a>
                                            </td>
                                        <?php else : ?>
                                            <td></td>
                                        <?php endif; ?>
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
    
    <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Catatan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p style="color: red; border-color: 1px solid red"></p>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    