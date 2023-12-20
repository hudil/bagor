<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Document</title>
    <style>
        h2 {
            text-align: center
        }
        table {
            border-collapse: collapse;
            font-size: 12px;
        }
        tr.varrow {
            background-color: #acadac;
        }
        tr.judultable {
            background-color: #696b69;
        }
        .page_break { 
            page-break-after: avoid;
        }
        .variable {
            height: 30px;
        }
        .indikator {
            height: 50px;
        }
    </style>
</head>
<body>
    <h2>Penilaian Perangkat Daerah</h2>

    <h3>Perangkat Daerah : <?= getopd($this->session->userdata('opd_id'))['opd'] ?></h3>
    <table border="1">
        <tr class="judultable">
            <th width="30">NO.</th>
            <th width="180">VARIABLE DAN KUALIFIKASI</th>
            <th width="200">INDIKATOR</th>
            <th width="50">PILIH</th>
            <th width="50">SKOR</th>
        </tr>
        <!-- variable -->
        <?php foreach($variable as $var) : ?>
        <tr class="varrow page_break">
            <td style="text-align: center" class="variable"><?= angka_romawi($no) ?>.</td>
            <td><?= $var['variable'] ?></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <?php foreach(get_indikator($var['id']) as $indikator) : ?>
        <?php if ($no_indikator > 5) : ?>
            <?php $no_indikator = 1; ?>
        <?php endif; ?>
        <tr>
            <td class="indikator"></td>
            <td><?= $no_indikator; ?>. <?= $indikator['tingkat_kematangan']; ?></td>
            <td><?= $indikator['indikator']; ?></td>
            <td><?= (get_skor_opd($this->session->userdata('opd_id'), $tahun, $indikator['id']) ? '<div style="font-family: DejaVu Sans, sans-serif;text-align: center">✔</div>' : '') ?></td>
            <td style="text-align: center"><?= (get_skor_opd($this->session->userdata('opd_id'), $tahun, $indikator['id']) ? get_skor_opd($this->session->userdata('opd_id'), $tahun, $indikator['id'])['skor'] : '') ?></td>
        </tr>
        <?= $no_indikator++; ?>
        <?php endforeach; ?>

        <?php $no++; ?>
        <?php endforeach; ?>
        <tr>
            <td height="30" colspan="4" style="text-align: center"><b>TOTAL</b></td>
            <td style="text-align: center"><b><?= (get_total_skor($this->session->userdata('opd_id'), $tahun)['total_skor'] != NULL) ? number_format(get_total_skor($this->session->userdata('opd_id'), $tahun)['total_skor'],2,'.',',') : number_format(0.00, 2,'.',',') ?></b></td>
        </tr>
        <tr>
            <td height="30" colspan="4" style="text-align: center"><b>TINGKAT KEMATANGAN</b></td>
            <td style="text-align: center"><b><?= get_status_kematangan(get_total_skor($this->session->userdata('opd_id'), $tahun)['total_skor']) ?></b></td>
        </tr>
    </table>
    <br><br><br><br><br>
    <table class="ttd" border="0" style="text-align: center;">
        <tr>
            <td style="text-align: left" width="200">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= hari_ini(date("D", strtotime($tgl_verif))) ?>, <?= tgl_indo($tgl_verif) ?></td>
            <td width="100" rowspan="11"></td>
            <td style="text-align: left" width="200">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= hari_ini(date("D")) ?>, <?= tgl_indo(date("Y-m-d")) ?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td></td>
        </tr>
        <tr>
            <td>Telah diverfikasi</td>
            <td>Mengetahui</td>
        </tr>
        <tr>
            <td width="200">ADMIN BAGIAN ORGANISASI <br>KOTA PASURUAN</td>
            <td width="200">KEPALA <?= strtoupper($opd) ?></td>
        </tr>
        <tr>
            <td></td>
            <td>KOTA PASURUAN</td>
        </tr>
        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
        <tr>
            <td><u>Dwiki Raisaty, S.H.</u></td>
            
            <td><u><?= $nama_kepala ?></u></td>
        </tr>
        <tr><td>Sub Bagian Kelembagaan dan Analisis Jabatan</td><td><?= $jabatan ?></td></tr>
        <tr><td>NIP. 19890325 201502 2 004</td><td>NIP. <?= $nip; ?></td></tr>
    </table>
</body>
</html>