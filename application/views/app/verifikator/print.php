<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-size: 12px;
        }

        table {
            border-collapse: collapse;
        }

        .header {
            text-align: center;
        }

        .header p {
            margin-top: -10px;
        }

        .header h3 {
            margin-top: -15px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>Penilaian Perangkat Daerah</h2>
        <h3>Pemerintah Kota Pasuruan</h3>
        <p><b><?= $tahun ?></b></p>
    </div>
    

    <table border="1" style="margin-top: 40px;">
        <tr>
            <th height="30" width="30">NO</th>
            <th width="440">Perangkat Daerah</th>
            <th width="50">Skor</th>
        </tr>
        <?php foreach($opd as $o) : ?>
        <tr>
            <td height="20" style="text-align: center"><?= $no ?>.</td>
            <td>
                <?= $o['opd'] ?>
            </td>
            <td style="text-align: center"><?= (get_total_skor($o['id'], $tahun)['total_skor'] != NULL) ? number_format(get_total_skor($o['id'], $tahun)['total_skor'],2,'.',',') : number_format(0,2,'.',',') ?></td>
        </tr>
        <?php $no++ ?>
        <?php endforeach; ?>
        <tr>
            <td height="30" colspan="2" style="text-align: center"><b>TOTAL</b></td>
            <td style="text-align: center"><b><?= ($skor_akhir != null) ? number_format($skor_akhir,2,'.',',') : 0.00 ?></b></td>
        </tr>
        <tr>
            <td height="30" colspan="2" style="text-align: center"><b>TINGKAT KEMATANGAN</b></td>
            <td style="text-align: center"><b><?= get_status_kematangan($total_skor['total']) ?></b></td>
        </tr>
    </table>
    <br><br><br><br><br>
    <table class="ttd" border="0" style="text-align: center;margin-left: 10px">
        <tr>
            <td>Mengetahui</td>
            <td width="300px"></td>
            <td>Mengetahui</td>
        </tr>
        <tr>
            <td>KEPALA SEKRETARIAT DAERAH</td>
            <td></td>
            <td>KEPALA BAGIAN ORGANISASI</td>
        </tr>
        <tr>
            <td>KOTA PASURUAN</td>
            <td></td>
            <td>KOTA PASURUAN</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td><u>Rudiyanto, AP, MM</u></td>
            <td></td>
            <td><u>Cindy Tri Siwiyanti, SH, M.Hum</u></td>
        </tr>
        <tr>
            <td>Pembina Utama Muda (IV/c)</td>
            <td></td>
            <td>Pembina (IV/a)</td>
        </tr>
        <tr>
            <td>NIP. 19730910 199311 1 001</td>
            <td></td>
            <td>NIP. 19800620 200312 2 011</td>
        </tr>
    </table>
</body>
</html>