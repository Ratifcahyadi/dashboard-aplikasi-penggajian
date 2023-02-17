<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>

    <div class="card mb-3">
        <div class="card-header bg-primary text-white">
            Input Absensi Pegawai
        </div>
        <div class="card-body">
            <form class="form-inline">
                <div class="form-group mb-2">
                    <label class="pr-2" for="">Bulan</label>
                    <select name="bulan" id="" class="form-control">
                        <option disabled="disabled" value="">--Pilih Bulan--</option>
                        <option value="01">Januari</option>
                        <option value="02">Februari</option>
                        <option value="03">Maret</option>
                        <option value="04">April</option>
                        <option value="05">Mei</option>
                        <option value="06">Juni</option>
                        <option value="07">Juli</option>
                        <option value="08">Agustus</option>
                        <option value="09">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Desember</option>
                    </select>
                </div>
                <div class="form-group ml-3 mb-2">
                    <label class="pr-2 " for="">Tahun</label>
                    <select name="tahun" id="" class="form-control">
                        <option disabled="disabled" value="">--Pilih Tahun--</option>
                        <?php $tahun = date('Y');

                        for ($i = 2023; $i < $tahun + 5; $i++) { ?>
                            <option value="<?php echo $i ?>"><?php echo $i ?></option>
                        <?php
                        } ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mb-2 ml-auto"><i class="fas fa-eye pr-2"></i>Generate</button>
            </form>
        </div>
    </div>

    <?php
    if ((isset($_GET['bulan']) && $_GET['bulan'] != '') && (isset($_GET['tahun']) && $_GET['tahun'] != '')) {
        $bulan = $_GET['bulan'];
        $tahun = $_GET['tahun'];
        $bulantahun =  $bulan . $tahun;
    } else {
        $bulan = date('m');
        $tahun = date('Y');
        $bulantahun =  $bulan . $tahun;
    }
    ?>
    <div class="alert alert-info">Menamplikan Data Kehadiran Pegawai Bulan: <span class="font-weight-bold"><?php echo $bulan ?></span> Tahun: <span class="font-weight-bold"><?php echo $tahun ?></span> </div>

    <form action="" method="post">
    <button value="submit" type="submit" name="submit" class="btn btn-success mb-3">Simpan</button>
    <table class="table table-bordered table-striped mb-4">
        <tr>
            <td class="text-white bg-secondary">No.</td>
            <td class="text-white bg-secondary">NIK</td>
            <td class="text-white bg-secondary">Nama Pegawai</td>
            <td class="text-white bg-secondary">Jenis Kelamin</td>
            <td class="text-white bg-secondary">Jabatan</td>
            <td class="text-white bg-secondary" width="10%">Hadir</td>
            <td class="text-white bg-secondary" width="10%">Sakit</td>
            <td class="text-white bg-secondary" width="10%">Alpha</td>
        </tr>
        <?php $no = 1;
        foreach ($input_absensi as $key => $a) : ?>
            <tr>
                <input type="hidden" name="bulan[]" id="" class="form-control" value="<?php echo $bulantahun ?>">   
                <input type="hidden" name="nik[]" id="" class="form-control" value="<?php echo $a->nik ?>"> 
                <input type="hidden" name="nama_pegawai[]" id="" class="form-control" value="<?php echo $a->nama_pegawai ?>">   
                <input type="hidden" name="jenis_kelamin[]" id="" class="form-control" value="<?php echo $a->jenis_kelamin ?>"> 
                <input type="hidden" name="nama_jabatan[]" id="" class="form-control" value="<?php echo $a->nama_jabatan ?>">   
                <td><?php echo $no++ ?></td>
                <td><?php echo $a->nik ?></td>
                <td><?php echo $a->nama_pegawai ?></td>
                <td><?php echo $a->jenis_kelamin ?></td>
                <td><?php echo $a->nama_jabatan ?></td>
                <td><input type="number" name="hadir[]" id="" class="form-control" value="0"></td>
                <td><input type="number" name="sakit[]" id="" class="form-control" value="0"></td>
                <td><input type="number" name="alpha[]" id="" class="form-control" value="0"></td>
            </tr>
        <?php endforeach; ?>
    </table>
        </form>

</div>