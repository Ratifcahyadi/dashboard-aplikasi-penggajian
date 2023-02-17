<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <style>
        body {
            font-family: Arial;
            color: black;
        }
    </style>
</head>

<body>
    <center>
        <h1 class="bg-light">PT Indonesia Bangkit</h1>
        <h2>Daftar Gaji Pegawai</h2>
    </center>

    <?php
    // if ((isset($_GET['bulan']) && $_GET['bulan'] != '') && (isset($_GET['tahun']) && $_GET['tahun'] != '')) {
    
    if ((isset($_POST['bulan'])) && (isset($_POST['tahun']))) {
        $bulan = $_POST['bulan'];
        $tahun = $_POST['tahun'];
        $bulantahun =  $bulan . $tahun;
    } else {
        $bulan = date('m');
        $tahun = date('Y');
        $bulantahun =  $bulan . $tahun;
    }

    // if ((isset($_GET['bulan'])) && (isset($_GET['tahun']))) {
    //     $bulan = $_GET['bulan'];
    //     $tahun = $_GET['tahun'];
    //     $bulantahun =  $bulan . $tahun;
    // } else {
    //     $bulan = date('m');
    //     $tahun = date('Y');
    //     $bulantahun =  $bulan . $tahun;
    // }
    ?>

    <table>
        <tr>
            <td>Bulan</td>
            <td>:</td>
            <td><?php echo $bulan ?></td>
        </tr>
        <tr>
            <td>Tahun</td>
            <td>:</td>
            <td><?php echo $tahun ?></td>
        </tr>
    </table>

    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <tr>
                <th class="text-semibold">No.</th>
                <th class="text-semibold">NIK</th>
                <th class="text-semibold">Nama Pegawai</th>
                <th class="text-semibold">jenis Kelamin</th>
                <th class="text-semibold">Jabatan</th>
                <th class="text-semibold">Gaji pokok</th>
                <th class="text-semibold">Tj. Transport</th>
                <th class="text-semibold">Uang Makan</th>
                <th class="text-semibold">Potongan</th>
                <th class="text-semibold">Total Gaji</th>
            </tr>

            <?php foreach ($potongan as $p) {
                $alpha = $p->jml_potongan;
            } ?>

            <?php $no = 1;
            foreach ($cetakGaji as $g) : ?>
                <?php $potongan = $g->alpha * $alpha ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $g->nik ?></td>
                    <td><?php echo $g->nama_pegawai ?></td>
                    <td><?php echo $g->jenis_kelamin ?></td>
                    <td><?php echo $g->nama_jabatan ?></td>
                    <td>Rp <?php echo number_format($g->gaji_pokok, 0, ',', '.') ?></td>
                    <td>Rp <?php echo number_format($g->tj_transport, 0, ',', '.') ?></td>
                    <td>Rp <?php echo number_format($g->uang_makan, 0, ',', '.') ?></td>
                    <td>Rp <?php echo number_format($potongan, 0, ',', '.') ?></td>
                    <td>Rp <?php echo number_format($g->gaji_pokok + $g->tj_transport + $g->uang_makan - $potongan, 0, ',', '.') ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>

    <table width="100%">
        <tr>
            <td></td>
            <td width="200px">
                <p>Jakarta, <?php echo date("d M Y") ?> <br>Finance</p>
                <br>
                <br>
                <p>_____________________</p>
            </td>
        </tr>
    </table>

</body>

<script type="text/javascript">
    window.print();
</script>
</html>