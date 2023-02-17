<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-center mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>

    <form method="POST" action="<?php echo base_url('gantiPassword/gantiPasswordAksi') ?>" >
    <div class="card mb-5 w-50 mx-auto">
        <div class="card-body">
            <div class="form-group">
                <label for="">Password Baru</label>
                <input type="password" name="passBaru" id="" class="form-control">
                <?php echo form_error('passBaru', '<div class="text-small text-danger"><?div>')?>
            </div>
            <div class="form-group">
                <label for="">Ulangi Password Baru</label>
                <input type="password" name="ulangPass" id="" class="form-control">
                <?php echo form_error('ulangPass', '<div class="text-small text-danger"><?div>')?>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
        </div>
    </div>
</form>
</div>