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
                        <h6 class="page-title text-custom">Verifikasi PD</h6>
                    </div>
                    <div class="col-md-4">
                        <form action="<?= base_url('verifikator/print') ?>" method="post">
                            <select class="select2 form-control" name="tahun" style="border: 2px solid #FF6600;">
                                <option readonly disabled selected>-- Pilih --</option>
                                <?php for($tahun = 2022; $tahun <= date('Y'); $tahun++) : ?>
                                    <option value="<?= $tahun ?>"><?= $tahun ?></option>
                                <?php endfor; ?>
                            </select>
                    </div>
                    <div class="col-md-2">
                            <button type="submit" class="btn btn-success">Print</button>
                        </form>
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
                                        <th>OPD</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach($opd as $pd) : ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $pd['opd']; ?></td>
                                        <td>
                                            <a href="<?= base_url('verifikator/verify/' . $pd['id']) ?>"><i class="fas fa-file-invoice text-info"></i></a>
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
    
    