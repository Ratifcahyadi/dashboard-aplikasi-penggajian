<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>


    <div class="card">
        <div class="card-body">
            <form action="<?php echo base_url('admin/potonganGaji/tambahDataAksi')?>" method="post">
                <div class="form-group">
                    <label for="">Jenis Potongan</label>
                    <input type="text" name="potongan" id="" class="form-control">
                    <?php echo form_error('potongan') ?>
                </div>
                <div class="form-group">
                    <label for="">Jumlah Potongan</label>
                    <input type="number" name="jml_potongan" id="" class="form-control">
                    <?php echo form_error('jml_potongan') ?>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>