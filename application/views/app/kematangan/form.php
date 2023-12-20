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
                        <h6 class="page-title text-custom">Variable <?= $variable['variable']; ?></h6>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <?php if ($this->session->flashdata('error')) : ?>
                                
                                <div class="alert alert-danger mb-3" role="alert">
                                    <ul>
                                    <?php foreach($this->session->flashdata('error') as $error) : ?>

                                        <li><?= $error ?></li>
                                        
                                    <?php endforeach; ?>    
                                    </ul>
                                </div>

                            <?php endif; ?>
                            <form action="<?= base_url('kematangan/proc_form') ?>" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="variable_id" value="<?= $var_id ?>">
                                <table class="table-bordered">
                                    <tr class="text-center">
                                        <th height="50">Tingkat Kematangan</th>
                                        <th>Indikator</th>
                                        <th>Penjelasan</th>
                                        <th width="50">Pilih</th>
                                        <th width="50">Info</th>
                                    </tr>
                                    <?php foreach($form as $f) : ?>
                                    <tr>
                                        <td class="text-center" height="50"><?= $f['tingkat_kematangan'] ?></td>
                                        <td><?= $f['indikator'] ?></td>
                                        <td><?= $f['penjelasan'] ?></td>
                                        <td>
                                            <div class="text-center">
                                                <input type="radio" id="pilih_<?= $f['field'] ?>" name="pilih" value="<?= $f['skor'] ?>" required>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <i class="mdi mdi-help-circle-outline text-info" data-toggle="tooltip" data-placement="top" title="<?= $f['info']; ?>"></i>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </table>
                                <div class="mt-3 mb-3">
                                    <label for="filePendukung" class="form-label">File Pendukung Tingkat Kematangan</label><br>
                                    <!-- <input type="file" name="file_pendukung" id="filePendukung" class="filestyle" data-input="false" data-buttonname="btn-secondary" accept="application/pdf"> -->
                                    <a href="https://drive.google.com/drive/folders/1kCPSCylXpNY4emKq2AtTcVrIcRIdvxgi?usp=sharing" class="btn btn-secondary">Link Upload</a>
                                </div>
                                <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i> Submit</button>
                                <a href="<?= base_url('kematangan'); ?>" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Kembali</a>
                            </form>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
    
    