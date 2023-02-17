<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <style type="text/css">
        body {
            font-family: Arial;
            color: black;
        }
    </style>
</head>
<body>
    <center>
        <h1 class="bg-light" >PT Indonesia Bangkit</h1>
        <h2>Laporan Kehadiran Pegawai</h2>
    </center>

    <?php 
        // $bulan = $this->input->post('bulan');
        // $tahun = $this->input->post('tahun');
        // $bulantahun = $bulan.$tahun;
    if ((isset($_POST['bulan'])) && (isset($_POST['tahun']) )) {
        $bulan = $_POST['bulan'];
        $tahun = $_POST['tahun'];
        $bulantahun =  $bulan.$tahun;
    } else {
        $bulan = date('m');
        $tahun = date('Y');
        $bulantahun =  $bulan.$tahun;
    }
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

    <table class="table table-striped table-bordered">
        <tr>
            <th class="text-semibold">No.</th>
            <th class="text-semibold">Nama Pegawai</th>
            <th class="text-semibold">NIK</th>
            <th class="text-semibold">Jabatan</th>
            <th class="text-semibold">Hadir</th>
            <th class="text-semibold">Sakit</th>
            <th class="text-semibold">Alpha</th>
        </tr>

        <?php $no=1; foreach($lap_kehadiran as $l) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $l->nama_pegawai ?></td>
                <td><?php echo $l->nik ?></td>
                <td><?php echo $l->nama_jabatan ?></td>
                <td><?php echo $l->hadir ?></td>
                <td><?php echo $l->sakit ?></td>
                <td><?php echo $l->alpha ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

<script type="text/javascript">
    window.print();
</script>
</html>