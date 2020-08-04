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
                <h1>Pelanggaran</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Pelanggaran</a></li>
                    <li class="active">List Pelanggaran</li>
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
                        <strong class="card-title">List </strong>Pelanggaran
                        <?php if ($this->session->userdata('role_id') == 3) { ?>
                            <button style="float: right" class="btn btn-warning" onclick="showAdd()"><i class="fa fa-plus-circle"> Tambah Pelanggaran</i></button>
                        <?php } ?>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Nama Siswa</th>
                                    <th>Pelanggaran</th>
                                    <?php if ($this->session->userdata('role_id') == 3 || $this->session->userdata('role_id') == 1) { ?>
                                        <th>Aksi</th>
                                    <?php } ?>

                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $key => $item) { ?>
                                    <tr>
                                        <td><?= $item->tanggal ?></td>
                                        <td><?= $item->nama_siswa ?></td>
                                        <td><?= $item->keterangan ?></td>

                                        <?php if ($this->session->userdata('role_id') == 3 || $this->session->userdata('role_id') == 1) { ?>
                                            <td>
                                                <?= anchor(site_url('pelanggaran/edit/' . $item->id), '<i class="fa fa-pencil" ></i>', 'class="btn btn-warning"'); ?>
                                                <?= anchor(site_url('pelanggaran/delete/' . $item->id), '<i class="fa fa-trash" ></i>', 'class="btn btn-danger"'); ?>
                                            </td>
                                        <?php } ?>

                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div id="add" class="col-4 col-md-4" style="visibility: hidden">
                <div class="card">
                    <form action="<?= site_url('pelanggaran/add') ?>" method="post" class="form-horizontal">
                        <div class="card-header">
                            <strong>Tambah </strong>Pelanggaran
                        </div>
                        <div class="card-body card-block">

                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Tanggal</label></div>
                                <div class="col-12 col-md-9"><input type="date" name="tanggal" class="form-control" required><small class="form-text text-muted">Masukan Tanggal Absensi</small></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-12"><label for="text-input" class=" form-control-label">Pelanggaran</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="keterangan" placeholder="Berkelahi" class="form-control"><small class="form-text text-muted">Masukan pelanggaran</small></div>
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