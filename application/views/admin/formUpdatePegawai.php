<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>

    <div class="card mb-5">
        <div class="card-body">
            <?php foreach ($pegawai as $key => $p) : ?>
                <form method="POST" action="<?php echo base_url('admin/dataPegawai/updateDataAksi') ?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">NIK</label>
                        <input type="hidden" name="id_pegawai" value="<?php echo $p->id_pegawai ?>" class="form-control">
                        <input type="number" name="nik" id="" class="form-control" value="<?php echo $p->nik ?>">
                        <?php echo form_error('nik', '<div class="text-small text-danger"><?div>') ?>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Pegawai</label>
                        <input type="text" name="nama_pegawai" id="" class="form-control" value="<?php echo $p->nama_pegawai ?>">
                        <?php echo form_error('nama_pegawai', '<div class="text-small text-danger"><?div>') ?>
                    </div>
                    <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="username" id="" class="form-control"  value="<?php echo $p->username ?>">
                    <?php echo form_error('username', '<div class="text-small text-danger"><?div>') ?>
                    </div>
                    <!-- <div class="form-group">
                        <label for="">Password</label>
                        <input type="text" name="password" id="" class="form-control"  value="<?php echo $p->password ?>">
                        <?php echo form_error('password', '<div class="text-small text-danger"><?div>') ?>
                    </div> -->
                    <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <select type="text" name="jenis_kelamin" id="" class="form-control">
                            <!-- <option value="<?php echo $p->jenis_kelamin ?>"></option> -->
                            <option <?php echo ($p->jenis_kelamin == 'Laki-laki') ? "selected": "" ?>>Laki-laki</option>
                            <option <?php echo ($p->jenis_kelamin == 'Perempuan') ? "selected": "" ?>>Perempuan</option>
                            <?php echo form_error('jenis_kelamin', '<div class="text-small text-danger"><?div>') ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Jabatan</label>
                        <select type="text" name="jabatan" id="" class="form-control">
                            <option value="<?php echo $p->jabatan ?>"><?php echo $p->jabatan ?></option>
                            <?php foreach ($jabatan as  $j) : ?>
                            <option value="<?= $j->nama_jabatan ?>"><?= $j->nama_jabatan ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Masuk</label>
                        <input type="date" name="tanggal_masuk" id="" class="form-control" value="<?php echo $p->tanggal_masuk ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Status</label>
                        <select type="text" name="status" id="" class="form-control" >
                            <option disabled="disabled" value="<?php echo $p->status  ?>"><?php echo $p->status ?></option>
                            <option value="Pegawai Tetap" <?php if($p->status="Pegawai Tetap") echo 'selected="selected"' ?>>Pegawai Tetap</option>
                            <option value="Pegawai Tidak Tetap" <?php if($p->status="Pegawai Tidak Tetap") echo 'selected="selected"' ?>>Pegawai Tidak Tetap</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="validatedInputGroupCustomFile">Photo</label>
                        <input id="" type="file" name="photo" class="form-control" value="<?php echo $p->photo ?>">
                        <?= $p->photo ?>
                    </div>
                    <div class="form-group">
                        <label for="">Hak Akses</label>
                        <select type="text" name="hak_akses" id="" class="form-control">

                        <option disabled="disabled" value="<?php echo $p->hak_akses ?>" >                
                        <?php 
                        if ($p->hak_akses == '1') { ?>
                            <td>Admin</td>
                        <?php
                        } else { ?>
                            <td>Pegawai</td>
                        <?php }
                        ?>
                        </option>
                            <option value="1" <?php if($p->hak_akses="1") echo 'selected=""' ?>>Admin</option>
                            <option value="2" <?php if($p->hak_akses="2") echo 'selected=""' ?>>Pegawai</option>
                        </select>
                        
                    <button type="submit" class="btn btn-info w-100 mt-4 mb-4">Update</button>
                </form>
            <?php endforeach; ?>
        </div>
    </div>
</div>
                    <!-- <label for="validatedInputGroupCustomFile">Photo</label>
                <div class="custom-file">
                    <input type="file" name="photo" class="custom-file-input" id="validatedInputGroupCustomFile">
                    <label class="custom-file-label" for="validatedInputGroupCustomFile">Choose file...</label>
                </div> -->