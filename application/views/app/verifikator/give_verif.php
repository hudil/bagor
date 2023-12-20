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
                        <h6 class="page-title text-custom">Form Verifikasi Input Kematangan</h6>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="" method="post">
                                <!-- <input type="hidden" name="variable_id" value="<?= $var_id ?>"> -->
                                <table class="table-bordered mb-3">
                                    <tr class="text-center">
                                        <th height="50">Tingkat Kematangan</th>
                                        <th>Indikator</th>
                                        <th>Penjelasan</th>
                                        <th width="50">Pilihan PD</th>
                                        <th width="80">Verifikator</th>
                                        <th width="50">Info</th>
                                    </tr>
                                    <?php foreach($form as $f) : ?>
                                    <tr>
                                        <td class="text-center" height="50"><?= $f['tingkat_kematangan'] ?></td>
                                        <td><?= $f['indikator'] ?></td>
                                        <td><?= $f['penjelasan'] ?></td>
                                        <td>
                                            <div class="text-center">
                                                <?php if ($skor != 0) : ?>
                                                    <input type="radio" id="pilih_<?= $f['field'] ?>" name="pilih" value="<?= $f['skor'] ?>" disabled <?= ($skor === $f['skor']) ? 'checked' : '' ?>>
                                                <?php else : ?>
                                                    <input type="radio" id="pilih_<?= $f['field'] ?>" name="pilih" value="<?= $f['skor'] ?>" disabled>
                                                <?php endif; ?>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <input type="radio" id="pilih_<?= $f['field'] ?>" name="verfikator" value="<?= $f['skor'] ?>" required>
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

                                <label for="catatan" class="form-label">Catatan</label>
                                <textarea name="catatan" class="form-control mb-3" style="border: 1px solid red"></textarea>

                                <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i> Submit</button>
                                <a href="<?= base_url('verifikator/verify/' . $opd_id); ?>" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Kembali</a>
                            </form>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
    
    