<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>

    <div class="card mb-3">
        <div class="card-header bg-primary text-white">
            Filter Data Absensi Pegawai
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
                <button type="submit" class="btn btn-primary mb-2 ml-auto"><i class="fas fa-eye pr-2"></i>Tampilkan Data</button>
                <a href="<?php echo base_url('admin/DataAbsensi/inputAbsensi')?>" class="btn btn-success mb-2 ml-3"><i class="fas fa-plus pr-2"></i>Input Kehadiran</a>
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

    <?php
    $jml_data = count($absensi);
    if ($jml_data > 0) {
    ?>

        <table class="table table-bordered table-striped">
            <tr>
                <td class="text-white bg-secondary">No.</td>
                <td class="text-white bg-secondary">NIK</td>
                <td class="text-white bg-secondary">Nama Pegawai</td>
                <td class="text-white bg-secondary">Jenis Kelamin</td>
                <td class="text-white bg-secondary">Jabatan</td>
                <td class="text-white bg-secondary">Hadir</td>
                <td class="text-white bg-secondary">Sakit</td>
                <td class="text-white bg-secondary">Alpha</td>         
            </tr>
            <?php $no = 1;
            foreach ($absensi as $key => $a) : ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $a->nik ?></td>
                    <td><?php echo $a->nama_pegawai ?></td>
                    <td><?php echo $a->jenis_kelamin ?></td>
                    <td><?php echo $a->nama_jabatan ?></td>
                    <td><?php echo $a->hadir ?></td>
                    <td><?php echo $a->sakit ?></td>
                    <td><?php echo $a->alpha ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

    <?php } else {
    ?> <span class="badge badge-danger"><i class="fas fa-info-circle pr-1"></i>Data Masih Kosong, silahkan input data kehadiran pada bulan dan tahun yang Anda pilih.</span>
    <?php } ?>
</div>