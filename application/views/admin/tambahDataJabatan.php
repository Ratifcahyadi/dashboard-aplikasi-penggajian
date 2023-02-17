<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>
<div class="card p-4" style="width: 100%; margin-bottom: 100px;">
    <div class="car-body">
        <form method="POST" action="<?= base_url('admin/dataJabatan/tambahDataAksi')?> ">
            <div class="form-group">
                <label for="">Nama Jabatan</label>
                <input type="text" name="nama_jabatan" class="form-control">
                <?php echo form_error('nama_jabatan', '<div class="text-small text-danger"><?div>')?>
            </div>
            <div class="form-group">
                <label for="">Gaji Pokok</label>
                <input type="text" name="gaji_pokok" class="form-control">
                <?php echo form_error('gaji_pokok', '<div class="text-small text-danger"><?div>')?>
            </div>
            <div class="form-group">
                <label for="">Tunjangan Transport</label>
                <input type="text" name="tj_transport" class="form-control">
                <?php echo form_error('tj_transport', '<div class="text-small text-danger"><?div>')?>
            </div>
            <div class="form-group">
                <label for="">Uang Makan</label>
                <input type="text" name="uang_makan" class="form-control">
                <?php echo form_error('uang_makan', '<div class="text-small text-danger"><?div>')?>
            </div>

            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</div>
</div>