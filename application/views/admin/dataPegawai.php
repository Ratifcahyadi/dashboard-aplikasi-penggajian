<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>

    <?php echo $this->session->flashdata('pesan') ?>

    <a class="mb-2 mt-2 btn btn-sm btn-success" href="<?php echo base_url('admin/dataPegawai/tambahData') ?>"><i class="fas fa-plus pr-2"></i>Tambah Pegawai</a>

    <table class="table table-bordered table-striped mt-2 mb-4 w-100">
        <tr>
            <th class="text-white bg-secondary" width="2%">No.</th>
            <th class="text-white bg-secondary" width="5%;">NIK</th>
            <th class="text-white bg-secondary" width="5%;">Nama Pegawai</th>
            <th class="text-white bg-secondary"  width="5%;">Jenis Kelamin</th>
            <th class="text-white bg-secondary"  width="5%;">Jabatan</th>
            <th class="text-white bg-secondary" width="15%;">Tanggal Masuk</th>
            <th class="text-white bg-secondary" width="5%;">Status</th>
            <th class="text-white bg-secondary" width="5%;">Photo</th>
            <th class="text-white bg-secondary" width="5%;">Hak Akses</th>
            <th class="text-white bg-secondary" width="10%;">Action</th>
        </tr>
        <?php $no = 1;
        foreach ($pegawai as $p) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $p->nik ?></td>
                <td><?php echo $p->nama_pegawai ?></td>
                <td><?php echo $p->jenis_kelamin ?></td>
                <td><?php echo $p->jabatan ?></td>
                <td><?php echo $p->tanggal_masuk ?></td>
                <td><?php echo $p->status ?></td>
                <td><img src="<?php echo base_url() . 'assets/photo/' . $p->photo ?>" width="75px" alt=""></td>

                <?php 
                if ($p->hak_akses == '1') { ?>
                    <td>Admin</td>
                <?php
                } else { ?>
                    <td>Pegawai</td>
                <?php }
                ?>
                <td>
                    <center>
                        <a class="btn btn-sm btn-primary m-1" href="<?php echo base_url('admin/dataPegawai/updateData/') . $p->id_pegawai ?>"><i class="fas fa-edit"></i></a>
                        <a onclick="return confirm('Yakin Mau Hapus?');" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/dataPegawai/deleteData/') . $p->id_pegawai ?>"><i class="fas fa-trash"></i></a>
                    </center>
                </td>
            </tr>
        <?php endforeach; ?>
</div>
</table>

</div>