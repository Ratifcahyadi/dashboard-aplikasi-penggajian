<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>

    <div class="card mb-5">
        <div class="card-body">
            <form method="POST" action="<?php echo base_url('admin/dataPegawai/DataAksi') ?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">NIK</label>
                    <input type="number" name="nik" id="" class="form-control">
                    <?php echo form_error('nik', '<div class="text-small text-danger"><?div>') ?>
                </div>
                <div class="form-group">
                    <label for="">Nama Pegawai</label>
                    <input type="text" name="nama_pegawai" id="" class="form-control">
                    <?php echo form_error('nama_pegawai', '<div class="text-small text-danger"><?div>') ?>
                </div>
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="username" id="" class="form-control">
                    <?php echo form_error('username', '<div class="text-small text-danger"><?div>') ?>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="text" name="password" id="" class="form-control">
                    <?php echo form_error('password', '<div class="text-small text-danger"><?div>') ?>
                </div>
                <div class="form-group">
                    <label for="">Jenis Kelamin</label>
                    <select type="text" name="jenis_kelamin" id="" class="form-control">
                        <option disabled="disabled">--Pilih Jenis Kelamin--</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                        <?php echo form_error('jenis_kelamin', '<div class="text-small text-danger"><?div>') ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Jabatan</label>
                    <select type="text" name="jabatan" id="" class="form-control">
                        <option disabled="disabled">--Pilih Jabatan--</option>
                        <?php foreach ($jabatan as  $j) : ?>
                            <option value="<?= $j->nama_jabatan ?>"><?= $j->nama_jabatan ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Tanggal Masuk</label>
                    <input type="date" name="tanggal_masuk" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Status</label>
                    <select type="text" name="status" id="" class="form-control">
                        <option disabled="disabled">--Pilih Status--</option>
                        <option value="Pegawai Tetap">Pegawai Tetap</option>
                        <option value="Pegawai Tidak Tetap">Pegawai Tidak Tetap</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="validatedInputGroupCustomFile">Photo</label>
                    <input id="" type="file" name="photo" class="form-control">
                </div>
                <div class="form-group">
                    <label for="validatedInputGroupCustomFile">Hak Akses</label>
                    <select id="" type="number" name="hak_akses" class="form-control">
                        <!-- <option disabled=disabled>--Hak Akses--</option> -->
                        <option value="1">Admin</option>
                        <option value="2">Pegawai</option>
                    </select>
                </div>
                
                <button type="submit" class="btn btn-primary w-100 mt-4 mb-4">Simpan</button>
            </form>
        </div>
    </div>
</div>

                <!-- <label for="validatedInputGroupCustomFile">Photo</label>
                <div class="custom-file">
                    <input type="file" name="photo" class="custom-file-input" id="validatedInputGroupCustomFile">
                    <label class="custom-file-label" for="validatedInputGroupCustomFile">Choose file...</label>
                </div> -->