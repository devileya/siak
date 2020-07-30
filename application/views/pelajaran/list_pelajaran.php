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
                <h1>Pelajaran</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Pelajaran</a></li>
                    <li class="active">List Pelajaran</li>
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
                        <strong class="card-title">List </strong>Pelajaran
                        <button style="float: right" class="btn btn-warning" onclick="showAdd()"><i class="fa fa-plus-circle"> Tambah Pelajaran</i></button>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama Pelajaran</th>
                                    <th>Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $key => $item) { ?>
                                    <tr>
                                        <td><?= $item->nama ?></td>
                                        <td>

                                            <?= anchor(site_url('pelajaran/edit/' . $item->id), '<i class="fa fa-pencil" ></i>', 'class="btn btn-warning"'); ?>
                                            <?= anchor(site_url('pelajaran/delete/' . $item->id), '<i class="fa fa-trash" ></i>', 'class="btn btn-danger"'); ?>

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
                    <form action="<?= site_url('pelajaran/add') ?>" method="post" class="form-horizontal">
                        <div class="card-header">
                            <strong>Tambah </strong>Pelajaran
                        </div>
                        <div class="card-body card-block">


                            <div class="row form-group">
                                <div class="col col-md-12"><label for="text-input" class=" form-control-label">Nama Pelajaran</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama" placeholder="Nama Pelajaran" class="form-control"><small class="form-text text-muted">Masukan nama pelajaran</small></div>
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