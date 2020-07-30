<?php $this->load->view('dashboard/header.php') ?>



<!-- Left Panel -->

<!-- /#left-panel -->

<!-- Left Panel -->

<!-- Right Panel -->



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
                    <li class="active">Edit Guru</li>
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
                    <form action="<?= site_url('guru/update/'.$data->user_id) ?>" method="post" enctype="multipart/form-data" class="form-horizontal">

                        <div class="card-header">
                            <strong>Edit</strong> Guru
                        </div>
                        <div class="card-body card-block">

                        <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">NIP</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="nip" placeholder="NIP" class="form-control" value="<?= $data->nip ?>"><small class="form-text text-muted">Masukan Nomor Induk Pegawai guru</small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Nama</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama" placeholder="Nama" class="form-control" value="<?= $data->nama ?>"><small class="form-text text-muted">Masukan nama guru</small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Alamat</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="alamat" placeholder="Alamat" class="form-control" value="<?= $data->alamat ?>"><small class="form-text text-muted">Masukan alamat guru</small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">No HP</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="no_hp" placeholder="No HP" class="form-control" value="<?= $data->no_hp ?>"><small class="form-text text-muted">Masukan nomor HP guru</small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Kategori Guru</label></div>
                                <div class="col-12 col-md-9">
                                        <select name="role_id" class="form-control" required>
                                            <option>--Pilih Kategori Guru--</option>
                                            <option value="3" <?php if ($data->role_id == '3') echo 'selected' ?>>Guru Wali</option>
                                            <option value="4" <?php if ($data->role_id == '4') echo 'selected' ?>>Guru BK</option>
                                        </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Username</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="username" placeholder="Username" class="form-control" value="<?= $data->username ?>"><small class="form-text text-muted">Masukan username</small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Password</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="password" placeholder="Password" class="form-control" value="<?= $data->password ?>"><small class="form-text text-muted">Masukan password</small></div>
                            </div>

                            </div>
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
