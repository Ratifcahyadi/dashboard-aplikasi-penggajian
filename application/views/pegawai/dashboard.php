<div class="container-fluid">
    <div class="justify-content-between d-sm-flex align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>

    <div class="alert alert-success font-weight-bold mb-4 w-50">
        Selamat datang, Anda login sebagai pegawai
    </div>

    <div class="card mb-5 w-75">
        <div class="card-header font-weight bold bg-primary text-white">Data Pegawai</div>
        <?php foreach ($pegawai as $p):?>
        <div class="card-body">
            <div class="row">
                <div class="col-md-5">
                    <img class="w-100 rounded-lg" src="<?php echo base_url('assets/photo/'.$p->photo) ?>" alt="">
                </div>
                <div class="col-md-7">
                    <table class="table ">
                        <tr>
                            <td>Nama Pegawai</td>
                            <td>:</td>
                            <td class="text-primary font-weight-bold"><?php echo $p->nama_pegawai?></td>
                        </tr>
                        <tr>
                            <td>Jabatan</td>
                            <td>:</td>
                            <td class="text-primary font-weight-bold"><?php echo $p->jabatan?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Masuk</td>
                            <td>:</td>
                            <td class="text-primary font-weight-bold"><?php echo $p->tanggal_masuk?></td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>:</td>
                            <td class="text-primary font-weight-bold"><?php echo $p->status?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach;?>
</div>