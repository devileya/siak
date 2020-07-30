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
                <h1>Absensi</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Absensi</a></li>
                    <li class="active">List Absensi</li>
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
                        <strong class="card-title">List </strong>Absensi
                        <button style="float: right" class="btn btn-warning" onclick="showAdd()"><i class="fa fa-plus-circle"> Tambah Absensi</i></button>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>NIS</th>
                                <th>Nama Siswa</th>
                                <th>Mata Pelajaran</th>
                                <th>Status</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($data as $key => $item) { ?>
                                <tr>
                                    <td><?= $item->tanggal ?></td>
                                    <td><?= $item->nis ?></td>
                                    <td><?= $item->nama_siswa ?></td>
                                    <td><?= $item->nama_pelajaran ?></td>
                                    <td><?= $item->status ?></td>
                                    <td><?= $item->keterangan ?></td>

                                    <td>

                                        <?= anchor(site_url('absensi/edit/'.$item->id),'<i class="fa fa-pencil" ></i>','class="btn btn-warning"');?>
                                        <?= anchor(site_url('absensi/delete/'.$item->id),'<i class="fa fa-trash" ></i>','class="btn btn-danger"');?>

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
                    <form action="<?= site_url('absensi/add') ?>" method="post" class="form-horizontal">
                        <div class="card-header">
                            <strong>Tambah </strong>Absensi
                        </div>
                        <div class="card-body card-block">

                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Tanggal</label></div>
                                <div class="col-12 col-md-9"><input type="date" name="tanggal" class="form-control" required><small class="form-text text-muted">Masukan Tanggal Absensi</small></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Siswa</label></div>
                                <div class="col-12 col-md-9">
                                        <select name="siswa_id" class="form-control" required>
                                            <option>--Pilih Siswa--</option>
                                            <?php foreach ($students as $student) {
                                                echo "<option value='$student->id'>$student->nama</option>";
                                            } ?>
                                        </select>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Pelajaran</label></div>
                                <div class="col-12 col-md-9">
                                        <select name="pelajaran_id" class="form-control" required>
                                            <option>--Pilih Pelajaran--</option>
                                            <?php foreach ($subjects as $subject) {
                                                echo "<option value='$subject->id'>$subject->nama</option>";
                                            } ?>
                                        </select>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Kehadiran</label></div>
                                <div class="col-12 col-md-9">
                                        <select name="status" class="form-control" required>
                                            <option value="HADIR">HADIR</option>
                                            <option value="SAKIT">SAKIT</option>
                                            <option value="IZIN">IZIN</option>
                                            <option value="ALPHA">ALPHA</option>
                                        </select>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Keterangan</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="keterangan" class="form-control"><small class="form-text text-muted">Masukan Keterangan</small></div>
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
