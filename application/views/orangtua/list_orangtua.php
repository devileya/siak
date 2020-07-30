<?php $this->load->view('dashboard/header.php') ?>



<!-- Left Panel -->

<!-- /#left-panel -->

<!-- Left Panel -->

<!-- Right Panel -->

<!-- /header -->
<!-- Header-->

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
                    <li class="active">List Orang Tua</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div id="tabel" class="col-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">List </strong>Orang Tua
                        <button style="float: right" class="btn btn-warning" onclick="showAdd()"><i class="fa fa-plus-circle"> Tambah Orang Tua</i></button>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Aksi</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($data as $key => $item) { ?>
                                <tr>
                                    <td><?= $item->nama ?></td>
                                    <td><?= $item->username ?></td>
                                    <td><?= $item->password ?></td>

                                    <td>

                                        <?= anchor(site_url('orangtua/edit/'.$item->user_id),'<i class="fa fa-pencil" ></i>','class="btn btn-warning"');?>
                                        <?= anchor(site_url('orangtua/delete/'.$item->user_id),'<i class="fa fa-trash" ></i>','class="btn btn-danger"');?>

                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div id="add" class="col-4 col-md-4" style="visibility: hidden">
                <div class="card">
                    <form action="<?= site_url('orangtua/add') ?>" method="post" class="form-horizontal">
                        <div class="card-header">
                            <strong>Tambah </strong>Orang Tua
                        </div>
                        <div class="card-body card-block">


                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Nama</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama" placeholder="Nama" class="form-control"><small class="form-text text-muted">Masukan nama orang tua</small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Username</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="username" placeholder="Username" class="form-control"><small class="form-text text-muted">Masukan username</small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Password</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="password" placeholder="Password" class="form-control"><small class="form-text text-muted">Masukan password</small></div>
                            </div>

                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Tambah
                            </button>
                            <button type="reset" class="btn btn-danger btn-sm">
                                <i class="fa fa-ban"></i> Reset
                            </button>
                        </div>
                    </form>
                </div>

            </div>


        </div>
    </div><!-- .animated -->
</div>
</div><!-- /#right-panel -->
<?php $this->load->view('dashboard/footer') ?>
