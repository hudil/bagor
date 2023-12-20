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
                    <div class="card border border-info">
                        <div class="card-body">
                            <?php if($sop == null) : ?> 
                                <div class="alert alert-success mb-0 text-center" role="alert">
                                    <h4 class="alert-heading font-18">Info dari developer!</h4>
                                    <p>Saat ini belum ada file SOP, silahkan upload file terlebih dahulu. Form untuk upload file SOP ada diatas <i class="mdi mdi-arrow-up-bold text-warning"></i> </p>
                                    <p class="mb-0">Terimakasih <i class="mdi mdi-account-heart" style="color: #fa0c6f"></i>.</p>
                                </div>
                            <?php else : ?>
                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>dokumen</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach ( $sop as $s ) : ?>
                                        <tr>
                                            <td><?= $no ?>. </td>
                                            <td><?= $s['dokumen_sop'] ?></td>
                                            <td>
                                                <a href="<?= base_url('sop/delete/') . $s['id'] ?>" onclick="return confirm('yakin ingin menghapus data tersebut?')"><i class="mdi mdi-trash-can-outline text-danger"></i></a>
                                            </td>
                                        </tr>
                                        <?php $no++; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
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
            <form action="<?= base_url('sop/do_upload') ?>" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="module" class="form-label">Pilih Sub Kegiatan</label>
                        <select name="module" id="module" class="form-control border-danger text-white bg-danger" required>
                            <option readonly selected>--Pilih Subkegiatan--</option>
                            <?php foreach($modules as $module) : ?>
                                <option value="<?= $module['id'] ?>"><?= $module['module'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-12">
                        <div class="card border border-warning">
                            <div class="card-body">
                                <label for="dokumen_sop" class="form-label">File SOP <small><i class="text-danger">Max: 2 Mb</i></small></label>
                                <input type="file" name="dokumen_sop" id="dokumen_sop" class="form-control">
                                <button type="submit" class="btn btn-primary mt-3">Submit</button>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </form>

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
    
    