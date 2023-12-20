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
                        <h6 class="page-title text-custom">Form Laporan Mandiri Perangkat Daerah yang telah <br> diverifikasi oleh Bagor</h6>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <?php if ($this->session->flashdata('error')) : ?>
                        <div class="row align-items-center mt-3">
                            <div class="col-md-12">
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                <i class="fas fa-close"></i> <?= $this->session->flashdata('error') ?>.
                            </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            
            <form action="<?= base_url('laporan/mandiri_verif') ?>" method="POST">
                <div class="row">
                    <div class="col-12 mb-3">
                        
                    </div>
                    <div class="col-12">
                        <div class="card border border-secondary">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="nama_kepala" class="form-label">Nama Kepala Perangkat Daerah</label>
                                        <input type="text" name="nama_kepala" id="nama_kepala" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="nip_kepala" class="form-label">NIP Kepala Perangkat Daerah <small class="text-danger">(Format: xxxxxxxx xxxxxx x xxx)</small></label>
                                        <input type="text" name="nip_kepala" id="nip_kepala" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <label for="jabatan_kepala" class="form-label">Pangkat Kepala Perangkat Daerah</label>
                                        <input type="text" name="jabatan_kepala" id="jabatan_kepala" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="tahun" class="form-label">Tahun Cetak</label>
                                        <select name="tahun" id="tahuncetakmandiri" class="form-control select2" required>
                                            <option readonly selected>--Pilih Tahun--</option>
                                            <?php for($tahun = 2022; $tahun <= date('Y'); $tahun++) : ?>
                                                <option value="<?= $tahun ?>"><?= $tahun ?></option>
                                            <?php endfor; ?>
                                        </select>
                                    </div>
                                </div>
                                
                                <button type="submit" class="btn btn-custom mt-3">Cetak</button>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </form>

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
    
    