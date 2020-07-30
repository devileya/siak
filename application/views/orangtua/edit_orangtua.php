<?php $this->load->view('dashboard/header.php') ?>



<!-- Left Panel -->

<!-- /#left-panel -->

<!-- Left Panel -->

<!-- Right Panel -->



<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Orang Tua</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Orang Tua</a></li>
                    <li class="active">Edit Orang Tua</li>
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
                    <form action="<?= site_url('orangtua/update/'.$data->user_id) ?>" method="post" enctype="multipart/form-data" class="form-horizontal">

                        <div class="card-header">
                            <strong>Edit</strong> OrangTua
                        </div>
                        <div class="card-body card-block">

                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Nama</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama" placeholder="Nama" class="form-control" value="<?= $data->nama ?>"><small class="form-text text-muted">Masukan nama orang tua</small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Username</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="username" placeholder="Username" class="form-control" value="<?= $data->username ?>"><small class="form-text text-muted">Masukan username</small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Password</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="password" placeholder="No Hp" class="form-control" value="<?= $data->password ?>"><small class="form-text text-muted">Masukan password</small></div>
                            </div>

                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Edit
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
