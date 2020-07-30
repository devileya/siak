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
                    <li class="active">List Siswa</li>
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
                        <strong class="card-title">List </strong>Siswa
                        <button style="float: right" class="btn btn-warning" onclick="showAdd()"><i class="fa fa-plus-circle"> Tambah Siswa</i></button>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Jenis Kelamin</th>
                                <th>Tempat, Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>Tahun Masuk</th>
                                <th>Orang Tua</th>
                                <th>Aksi</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($data as $key => $item) { ?>
                                <tr>
                                    <td><?= $item->nis ?></td>
                                    <td><?= $item->nama ?></td>
                                    <td><?= $item->nama_kelas ?></td>
                                    <td><?= $item->jk ?></td>
                                    <td><?= $item->ttl ?></td>
                                    <td><?= $item->alamat ?></td>
                                    <td><?= $item->tahun_masuk ?></td>
                                    <td><?= $item->nama_orangtua ?></td>

                                    <td>

                                        <?= anchor(site_url('siswa/edit/'.$item->user_id),'<i class="fa fa-pencil" ></i>','class="btn btn-warning"');?>
                                        <?= anchor(site_url('siswa/delete/'.$item->user_id),'<i class="fa fa-trash" ></i>','class="btn btn-danger"');?>

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
                    <form action="<?= site_url('siswa/add') ?>" method="post" class="form-horizontal">
                        <div class="card-header">
                            <strong>Tambah </strong>Siswa
                        </div>
                        <div class="card-body card-block">

                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">NIS</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="nis" placeholder="NIS" class="form-control" required><small class="form-text text-muted">Masukan Nomor Induk Siswa</small></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Nama</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="nama" placeholder="Nama" class="form-control" required><small class="form-text text-muted">Masukan nama siswa</small></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Jenis Kelamin</label></div>
                                <div class="col-12 col-md-9">
                                        <select name="jk" class="form-control" required>
                                            <option>--Pilih Jenis Kelamin--</option>
                                            <option value="Pria">Pria</option>
                                            <option value="Wanita">Wanita</option>
                                        </select>
                                </div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Tempat, Tanggal Lahir</label></div>
                                <div class="col-12 col-md-9"><input type="text"  name="ttl" placeholder="Pekanbaru, 10 Januari 2000" class="form-control" required><small class="form-text text-muted">Masukan tempat dan tanggal lahir siswa</small></div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Alamat</label></div>
                                <div class="col-12 col-md-9"><input type="text"  name="alamat" placeholder="Alamat" class="form-control" required><small class="form-text text-muted">Masukan alamat siswa</small></div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Tahun Masuk</label></div>
                                <div class="col-12 col-md-9"><input type="number"  name="tahun_masuk" placeholder="Tahun Masuk" class="form-control" required><small class="form-text text-muted">Masukan tahun masuk siswa</small></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Kelas</label></div>
                                <div class="col-12 col-md-9">
                                        <select name="kelas_id" class="form-control" required>
                                            <option>--Pilih Kelas--</option>
                                            <?php foreach ($classes as $class) {
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
                                                echo "<option value='$parent->id'>$parent->nama</option>";
                                            } ?>
                                        </select>
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
