<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>

    <div>
        <a class="btn btn-sm btn-success mb-3" href="<?php echo base_url('admin/dataJabatan/tambahData') ?>"><i class="fas fa-plus pr-2"></i>Tambah Data</a>
    </div>

    <?php echo $this->session->flashdata('pesan') ?>
    <table class="table table-bordered table-striped mt-2">
        <tr>
            <th class="text-white bg-secondary">No.</th>
            <th class="text-white bg-secondary">Nama Jabatan</th>
            <th class="text-white bg-secondary">Gaji Pokok</th>
            <th class="text-white bg-secondary">Tj. Transport</th>
            <th class="text-white bg-secondary">Uang Makan</th>
            <th class="text-white bg-secondary">Total</th>
            <th class="text-white bg-secondary">Action</th>
        </tr>
        <?php $no = 1;
        foreach ($jabatan as $j) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $j->nama_jabatan ?></td>
                <td>Rp <?php echo number_format($j->gaji_pokok, 0, ',', '.') ?></td>
                <td>Rp <?php echo number_format($j->tj_transport, 0, ',', '.') ?></td>
                <td>Rp <?php echo number_format($j->uang_makan, 0, ',', '.') ?></td>
                <td>Rp <?php echo number_format($j->gaji_pokok + $j->tj_transport + $j->uang_makan, 0, ',', '.') ?></td>
                <td>
                    <center>
                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/dataJabatan/updateData/' . $j->id_jabatan) ?>"><i class="fas fa-edit"></i></a>
                        <a onclick="return confirm('Yakin Mau Hapus?');" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/dataJabatan/deleteData/' . $j->id_jabatan) ?>"><i class="fas fa-trash"></i></a>
                    </center>
                </td>
            </tr>
        <?php endforeach; ?>
</div>
</table>
</div>