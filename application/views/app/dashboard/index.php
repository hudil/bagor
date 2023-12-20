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
                        <h6 class="page-title text-custom">Dashboard</h6>
                    </div>
                    <div class="col-md-4">
                        <select id="tahun_dashabord2" class="select2 form-control">
                            <option readonly disabled selected>-- Pilih --</option>
                            <?php for($tahun = 2022; $tahun <= date('Y'); $tahun++) : ?>
                                <option value="<?= $tahun ?>"><?= $tahun ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row mb-3">
                <div class="col-xl-12 col-md-12">
                    <div class="alert alert-custom mb-0 text-white" role="alert">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="<?= base_url('assets/app/images/dashboard_komoh.gif') ?>" width="100%" height="100%">
                            </div>
                            <!-- <div class="col-md-2">
                                <img src="<?= base_url('assets/app/images/daun_sirih.png'); ?>" alt="daunsirih" width="150" height="120">
                            </div>
                            <div class="col-md-8 text-center">
                                <h4 class="alert-heading font-18">Selamat Datang!</h4>
                                <p>Sate Komoh (Sistem pelAyanan Terpadu, Kolaboratif, Masif dan Holistik) merupakan aplikasi untuk mengakomodir pelayanan Bagian Organisasi kepada Perangkat Daerah secara keseluruhan</p>
                                <p class="mb-0">Gunakanlah aplikasi ini sebaik mungkin, salam hangat dari Bagian Organisasi Kota Pasuruan.</p>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-6 col-md-6">
                    <div class="card mini-stat bg-custom">
                        <div class="card-body">
                            <div class="mb-4">
                                <div class="float-start mini-stat-img me-4">
                                    <img src="<?= base_url('assets/app/') ?>/images/services-icon/01.png" alt="">
                                </div>
                                <h5 class="font-size-16 text-uppercase text-white-50">Total Nilai Kematangan Perangkat Daerah</h5>
                                <h4 class="fw-medium font-size-24" id="nilaiopd"><?= ($total_nilai != null) ? number_format($total_nilai,2,'.',',') : '-' ?></h4>
                                <div class="mini-stat-label bg-success">
                                    <p class="mb-0">&nbsp;</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="card mini-stat bg-custom">
                        <div class="card-body">
                            <div class="mb-4">
                                <div class="float-start mini-stat-img me-4">
                                    <img src="<?= base_url('assets/app/') ?>/images/services-icon/02.png" alt="">
                                </div>
                                <h5 class="font-size-16 text-uppercase text-white-50">Tingkat Kematangan Perangkat Daerah</h5>
                                <h4 class="fw-medium font-size-24" id="kematanganopd"><?= $tingkat_kematangan ?></h4>
                                <div class="mini-stat-label bg-success">
                                    <p class="mb-0">&nbsp;</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-6 col-md-6">
                    <div class="alert alert-custom2 mb-0 text-white" role="alert">
                        <table border="0" class="text-bold">
                            <tr>
                                <td colspan="3">Keterangan :</td>
                            </tr>
                            <tr>
                                <td width="100">Tingkat I</td>
                                <td>:</td>
                                <td>Skor 1</td>
                            </tr>
                            <tr>
                                <td>Tingkat II</td>
                                <td>:</td>
                                <td>Skor 2</td>
                            </tr>
                            <tr>
                                <td>Tingkat III</td>
                                <td>:</td>
                                <td>Skor 3</td>
                            </tr>
                            <tr>
                                <td>Tingkat IV</td>
                                <td>:</td>
                                <td>Skor 4</td>
                            </tr>
                            <tr>
                                <td>Tingkat V</td>
                                <td>:</td>
                                <td>Skor 5</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="alert alert-custom2 mb-0 text-white" role="alert">
                            <table border="0" class="text-bold">
                                <tr>
                                    <td colspan="3">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td width="200">Sangat Rendah</td>
                                    <td>:</td>
                                    <td>Skor 10 - 19</td>
                                </tr>
                                <tr>
                                    <td>Rendah</td>
                                    <td>:</td>
                                    <td>Skor 19.1 - 28</td>
                                </tr>
                                <tr>
                                    <td>Sedang</td>
                                    <td>:</td>
                                    <td>Skor 28.1 - 37</td>
                                </tr>
                                <tr>
                                    <td>Tinggi</td>
                                    <td>:</td>
                                    <td>Skor 37.1 - 46</td>
                                </tr>
                                <tr>
                                    <td>Sangat Tinggi</td>
                                    <td>:</td>
                                    <td>Skor 46.1 - 55</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
    
    