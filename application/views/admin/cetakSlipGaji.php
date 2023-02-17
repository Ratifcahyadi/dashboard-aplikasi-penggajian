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
            background: #eaebed;
            color: black;
        }
        hr {
            width: 50%;
            border-width: 5px;
            color: black;
        }
    </style>
</head>
<body>
    <center class="bg-light text-primary p-0">
        <h3>PT Indonesia Bangkit  </h3>
        
        <h6>--Slip Gaji Pegawai--</h6>
        <hr>
    </center>

    <?php 
    if ((isset($_POST['bulan'])) && (isset($_POST['tahun']))) {
            $bulan = $_POST['bulan'];
            $tahun = $_POST['tahun'];
            $bulantahun =  $bulan . $tahun;
        } else {
            $bulan = date('m');
            $tahun = date('Y');
            $bulantahun =  $bulan . $tahun;
        }
    ?>

    <?php foreach($potongan as $p) {
        $potongan = $p->jml_potongan;
    } ?>


<?php $no=1; foreach($print_slip as $ps): ?>
    <?php $potongan_gaji = $ps->alpha * $potongan?>
    <table  style="width:100%;">
        <tr>
            <td width="10%;">Nama Pegawai</td>
            <td width="2%;">:</td>
            <td class="text-primary"><?php echo $ps->nama_pegawai ?></td>
        </tr>
        <tr>
            <td>NIK</td>
            <td>:</td>
            <td class="text-primary"><?php echo $ps->nik ?></td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td>:</td>
            <td class="text-primary"><?php echo $ps->nama_jabatan ?></td>
        </tr>
        <tr>
            <td>Bulan</td>
            <td>:</td>
            <td class="text-primary"><?php echo $bulan ?></td>
        </tr>
        <tr>
            <td>Tahun</td>
            <td>:</td>
            <td class="text-primary"><?php echo $tahun ?></td>
        </tr>
    </table>

    <table class="table table-striped table-bordered mt-2">
        <tr>
            <th>No.</th>
            <th>Keterangan</th>
            <th>Jumlah</th>
        </tr>
        <tr>
            <td><?php echo $no++?></td>
            <td>Gaji Pokok</td>
            <td>Rp <?php echo number_format($ps->gaji_pokok,0,',','.')?></td>
        </tr>
        <tr>
            <td><?php echo $no++?></td>
            <td>Tunjangan Transport</td>
            <td>Rp <?php echo number_format($ps->tj_transport,0,',','.')?></td>
        </tr>
        <tr>
            <td><?php echo $no++?></td>
            <td>Uang Makan</td>
            <td>Rp <?php echo number_format($ps->uang_makan,0,',','.')?></td>
        </tr>
        <tr>
            <td><?php echo $no++?></td>
            <td>Potongan Gaji</td>
            <td>Rp <?php echo number_format($potongan_gaji,0,',','.')?></td>
        </tr>
        <tr>
            <th colspan="2"  style="text-align: right; ">Total Gaji</th>
            <th>Rp <?php echo number_format($ps->gaji_pokok + $ps->tj_transport + $ps->uang_makan - $potongan_gaji,0,',','.')?></th>
            
        </tr>
    </table>
    
    <table width="100%">
        <td></td>
        <td>
            <p>Pegawai</p>
            <br>
            <br>
            <p class="font-weight-bold"><?php echo $ps->nama_pegawai ?></p>
        </td>
        <td width="200px">
            <p>Jakarta, <?php echo date("d M Y")?> <br>Finance,</p>
            <br>
            <br>
            <p>_________________</p>
        </td>
    </table>
<?php endforeach; ?>
    
</body>
<script type="text/javascript">
    // window.print();
</script>
</html>