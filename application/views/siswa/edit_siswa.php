<?php $this->load->view('dashboard/header.php') ?>



<!-- Left Panel -->

<!-- /#left-panel -->

<!-- Left Panel -->

<!-- Right Panel -->



<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Siswa</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Siswa</a></li>
                    <li class="active">Edit Siswa</li>
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
                    <form action="<?= site_url('siswa/update/' . $data->user_id) ?>" method="post" enctype="multipart/form-data" class="form-horizontal">

                        <div class="card-header">
                            <strong>Edit</strong> Siswa
                        </div>
                        <div class="card-body card-block">

                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">NIS</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="nis" placeholder="NIS" class="form-control" value="<?= $data->nis ?>" required><small class="form-text text-muted">Masukan Nomor Induk Siswa</small></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Nama</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="nama" placeholder="Nama" class="form-control" value="<?= $data->nama ?>" required><small class="form-text text-muted">Masukan nama siswa</small></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Jenis Kelamin</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="jk" class="form-control" required>
                                        <option>--Pilih Jenis Kelamin--</option>
                                        <option value="Pria" <?php if ($data->jk == 'Pria') echo 'selected' ?>>Pria</option>
                                        <option value="Wanita" <?php if ($data->jk == 'Wanita') echo 'selected' ?>>Wanita</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Tempat, Tanggal Lahir</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="ttl" placeholder="Pekanbaru, 10 Januari 2000" class="form-control" value="<?= $data->ttl ?>" required><small class="form-text text-muted">Masukan tempat dan tanggal lahir siswa</small></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Alamat</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="alamat" placeholder="Alamat" class="form-control" value="<?= $data->alamat ?>" required><small class="form-text text-muted">Masukan alamat siswa</small></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Tahun Masuk</label></div>
                                <div class="col-12 col-md-9"><input type="number" name="tahun_masuk" placeholder="Tahun Masuk" class="form-control" value="<?= $data->tahun_masuk ?>" required><small class="form-text text-muted">Masukan tahun masuk siswa</small></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Kelas</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="kelas_id" class="form-control" required>
                                        <option>--Pilih Kelas--</option>
                                        <?php foreach ($classes as $class) {
                                            if ($class->id == $data->kelas_id)
                                                echo "<option value='$class->id' selected>$class->nama</option>";
                                            else
                                                echo "<option value='$class->id'>$class->nama</option>";
                                        } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Orang Tua Siswa</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="orangtua_id" class="form-control" required>
                                        <option>--Pilih Orang Tua Siswa--</option>
                                        <?php foreach ($parents as $parent) {
                                            if ($parent->id == $data->orangtua_id)
                                                echo "<option value='$parent->id' selected>$parent->nama</option>";
                                            else
                                                echo "<option value='$parent->id'>$parent->nama</option>";
                                        } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Username</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="username" placeholder="Username" class="form-control" value="<?= $data->username ?>" required><small class="form-text text-muted">Masukan username</small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Password</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="password" placeholder="Password" class="form-control" value="<?= $data->password ?>" required><small class="form-text text-muted">Masukan password</small></div>
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