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
                        <h6 class="page-title">Paper Subkegiatan</h6>
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
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Sub Kegiatan</label>
                                    <div class="col-sm-12">
                                        <select class="form-control select2" name="nama_subkeg">
                                            <option value="">Select</option>
                                            <?php foreach($subkegiatan as $sbk) : ?>
                                                <option value="<?= $sbk['id_subkeg'] ?>"><?= $sbk['nama_subkeg'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <small><i class="text-danger"><?php echo form_error('nama_subkeg'); ?></i></small>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="form-label">Cover</label>
                                    <input type="file" class="filestyle" data-buttonname="btn-secondary" name="cover">
                                    <small class="mb-3">File type: png, jpeg, jpg</small>
                                    <small><i class="text-danger"><?php echo form_error('cover'); ?></i></small>
                                </div>
                                <div class="row">
                                    <label class="form-label">Majalah</label>
                                    <input type="file" class="filestyle" data-buttonname="btn-secondary" name="majalah">
                                    <small class="mb-3">File type: pdf</small>
                                    <small><i class="text-danger"><?php echo form_error('majalah'); ?></i></small>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-4">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> <!-- row end -->
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
    
    