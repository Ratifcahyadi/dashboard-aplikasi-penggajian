<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>

<form action="<?php echo base_url('admin/laporanAbsensi/cetakLaporanAbsensi')?>" method="POST">
    <div class="card mx-auto mb-4" style="width: 45%">
        <div class="card-header bg-info text-white">Filter Laporan Absensi Pegawai</div>

        <div class="card-body">
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Bulan</label>
                <div class="col-sm-9">
                    <select name="bulan" class="form-control">
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
            </div>
            <div class="form-group row">
                <label for="my-input" class="col-sm-3 col-form-label">Tahun</label>
                <div class="col-sm-9">
                    <select name="tahun" id="" class="form-control">
                        <option disabled="disabled" value="">--Pilih Tahun--</option>
                        <?php $tahun = date('Y');

                        for ($i = 2023; $i < $tahun + 5; $i++) { ?>
                            <option value="<?php echo $i ?>"><?php echo $i ?></option>
                        <?php
                        } ?>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-info w-100"><i class="fas fa-print pr-2"></i>Cetak Laporan Absensi</button>
        </div>
    </div>
</form>
</div>