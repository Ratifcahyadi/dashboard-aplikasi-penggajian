<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>

    <?php echo $this->session->flashdata('pesan') ?>
    <a href="<?php echo base_url('admin/potonganGaji/tambahData') ?>" class="btn btn-sm btn-success mb-3"><i class="fas fa-plus pr-2"></i>Tambah Data</a>

    <table class="table table-bordered table-striped mt-2">
        <tr>
            <th class="text-white bg-secondary">No.</th>
            <th class="text-white bg-secondary">Jenis Potongan</th>
            <th class="text-white bg-secondary">Jumlah Potongan</th>
            <th class="text-white bg-secondary">Aksi</th>
        </tr>
        <?php $no= 1; ?>
        <?php  foreach($pot_gaji as $p) : ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $p->potongan ?></td>
            <td>Rp <?php echo number_format($p->jml_potongan, 0, ',', '.') ?></td>
            <td>
                <center>
                    <a href="<?php echo base_url('admin/potonganGaji/updateData/'.$p->id) ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                    <a onclick="return confirm('Yakin Hapus Data?')" href="<?php echo base_url('admin/potonganGaji/hapusData/'.$p->id) ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                </center>
            </td>
        </tr>

        <?php endforeach;?>
    </table>
</div>