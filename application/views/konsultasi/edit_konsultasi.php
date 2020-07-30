<?php $this->load->view('dashboard/header.php') ?>



<!-- Left Panel -->

<!-- /#left-panel -->

<!-- Left Panel -->

<!-- Right Panel -->



<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Konsultasi</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Konsultasi</a></li>
                    <li class="active">Edit Konsultasi</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="content mt-3">
    <div class="animated fadeIn">


        <div class="row">
            <!--/.col-->
            <div class="col-lg-12">
                <div class="card">
                    <form action="<?= site_url('konsultasi/update/' . $data->id) ?>" method="post" enctype="multipart/form-data" class="form-horizontal">

                        <div class="card-header">
                            <strong>Edit</strong> Konsultasi
                        </div>
                        <div class="card-body card-block">

                        <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Nama Pengirim</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="nama_pengirim" class="form-control" value="<?= $data->nama_pengirim ?>" readonly><small class="form-text text-muted">Nama Pengirim</small></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Pesan</label></div>
                                <div class="col-12 col-md-9"><textarea class="form-control" name="pesan" rows="3" readonly><?= $data->pesan ?></textarea><small class="form-text text-muted">Masukan Pesan Konsultasi</small></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Nama Penerima</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="nama_penerima" class="form-control" value="Aulia" readonly><small class="form-text text-muted">Nama Penerima</small></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Balasan</label></div>
                                <div class="col-12 col-md-9"><textarea class="form-control" name="balasan" rows="3" required></textarea><small class="form-text text-muted">Masukan Pesan Konsultasi</small></div>
                            </div>

                            <input type="hidden" name="user_id_penerima" value="13"/>

                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Submit
                            </button>
                            <button type="reset" class="btn btn-danger btn-sm">
                                <i class="fa fa-ban"></i> Reset
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

</div><!-- /#right-panel -->
<?php $this->load->view('dashboard/footer') ?>