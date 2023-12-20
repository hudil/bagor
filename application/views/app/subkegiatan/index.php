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
                        <h6 class="page-title">Sub Kegiatan</h6>
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item active">Welcome to Bagor App</li>
                        </ol>
                    </div>
                    <div class="col-md-4">
                        <div class="float-end d-none d-md-block">
                            <a class="btn btn-primary" href="<?= base_url('subkegiatan/tambah') ?>">
                                Tambah
                            </a>
                        </div>
                    </div>
                </div>
                <?php if ($this->session->userdata('success')) : ?>
                    <div class="row align-items-center mt-3">
                        <div class="col-md-12">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                <i class="fas fa-check"></i> <?= $this->session->userdata('success') ?>.
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
                                        <th>Nama</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach($subkegiatan as $sb) : ?>
                                        <tr>
                                            <td><?= $no; ?>. </td>
                                            <td><?= $sb['nama_subkeg']; ?></td>
                                            <td>
                                                <a href="<?= base_url('subkegiatan/edit/') . $sb['id_subkeg']; ?>"><i class="mdi mdi-square-edit-outline text-success"></i></a>
                                                <a href="<?= base_url('subkegiatan/delete/') . $sb['id_subkeg']; ?>" onclick="return confirm('yakin ingin menghapus data?')"><i class="mdi mdi-trash-can-outline text-danger"></i></a>
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
    
    