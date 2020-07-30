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
                <h1>Guru</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Guru</a></li>
                    <li class="active">List Guru</li>
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
                        <strong class="card-title">List </strong>Guru
                        <button style="float: right" class="btn btn-warning" onclick="showAdd()"><i class="fa fa-plus-circle"> Tambah Guru</i></button>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>NIP</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>No HP</th>
                                <th>Kategori Guru</th>
                                <th>Aksi</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($data as $key => $item) { ?>
                                <tr>
                                    <td><?= $item->nip ?></td>
                                    <td><?= $item->nama ?></td>
                                    <td><?= $item->alamat ?></td>
                                    <td><?= $item->no_hp ?></td>
                                    <td><?php if($item->role_id == 3) echo 'Guru Wali'; else echo 'Guru BK'; ?></td>

                                    <td>

                                        <?= anchor(site_url('guru/edit/'.$item->user_id),'<i class="fa fa-pencil" ></i>','class="btn btn-warning"');?>
                                        <?= anchor(site_url('guru/delete/'.$item->user_id),'<i class="fa fa-trash" ></i>','class="btn btn-danger"');?>

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
                    <form action="<?= site_url('guru/add') ?>" method="post" class="form-horizontal">
                        <div class="card-header">
                            <strong>Tambah </strong>Guru
                        </div>
                        <div class="card-body card-block">

                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">NIP</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="nip" placeholder="NIP" class="form-control"><small class="form-text text-muted">Masukan Nomor Induk Pegawai guru</small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Nama</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama" placeholder="Nama" class="form-control"><small class="form-text text-muted">Masukan nama guru</small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Alamat</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="alamat" placeholder="Alamat" class="form-control"><small class="form-text text-muted">Masukan alamat guru</small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">No HP</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="no_hp" placeholder="No HP" class="form-control"><small class="form-text text-muted">Masukan nomor HP guru</small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Kategori Guru</label></div>
                                <div class="col-12 col-md-9">
                                        <select name="role_id" class="form-control" required>
                                            <option>--Pilih Kategori Guru--</option>
                                            <option value="3">Guru Wali</option>
                                            <option value="4">Guru BK</option>
                                        </select>
                                </div>
                            </div>

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
