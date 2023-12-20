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
                            <a class="btn btn-secondary  dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" href="<?= base_url('subkegiatan/index') ?>">
                                Kembali
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="row">
                                        <label for="nama_subkeg" class="col-sm-2 col-form-label">Nama Sub Kegiatan</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="nama_subkeg" placeholder="Input nama subkeg" id="nama_subkeg" value="<?= set_value('nama_subkeg') ?>">
                                            <small><i class="text-danger"><?php echo form_error('nama_subkeg'); ?></i></small>
                                        </div>
                                        <div class="col-sm-12 mt-3">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div>
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
    
    