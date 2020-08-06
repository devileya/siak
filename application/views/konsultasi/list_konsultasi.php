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
                    <li class="active">List Konsultasi</li>
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
                        <strong class="card-title">List </strong>Konsultasi
                        <button style="float: right" class="btn btn-warning" onclick="showAdd()"><i class="fa fa-plus-circle"> Tambah Konsultasi</i></button>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Tanggal Dikirim</th>
                                    <th>Tanggal Dibalas</th>
                                    <th>Nama Pengirim</th>
                                    <th>Nama Penerima</th>
                                    <th>Pesan</th>
                                    <th>Balasan</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $key => $item) { ?>
                                    <tr>
                                        <td><?= $item->tanggal_dikirim ?></td>
                                        <td><?= $item->tanggal_dibalas ?></td>
                                        <td><?= $item->nama_pengirim ?></td>
                                        <td><?= $item->nama_penerima ?></td>
                                        <td><?= $item->pesan ?></td>
                                        <?php if ($item->balasan == null && $item->user_id_pengirim != $this->session->userdata('user_id')) { ?>
                                            <td>
                                                <?= anchor(site_url('konsultasi/edit/' . $item->id), 'BALAS', 'class="btn btn-warning"'); ?>
                                            </td>
                                        <?php } else echo "<td>$item->balasan</td>"; ?>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div id="add" class="col-4 col-md-4" style="visibility: hidden">
                <div class="card">
                    <form action="<?= site_url('konsultasi/add') ?>" method="post" class="form-horizontal">
                        <div class="card-header">
                            <strong>Tambah </strong>Konsultasi
                        </div>
                        <div class="card-body card-block">

                            <?php if ($this->session->userdata('role_id') == 4) { ?>
                                <div class="row form-group">
                                    <div class="col col-md-12"><label class=" form-control-label">Siswa</label></div>
                                    <div class="col-12 col-md-9">
                                        <select name="user_id_penerima" class="form-control" required>
                                            <option>--Pilih Siswa--</option>
                                            <?php foreach ($students as $student) {
                                                echo "<option value='$student->user_id'>$student->nama</option>";
                                            } ?>
                                        </select>
                                    </div>
                                </div>
                            <?php } ?>

                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Nama Pengirim</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="nama_pengirim" class="form-control" value="<?= $pengirim->nama ?>" readonly><small class="form-text text-muted">Nama Pengirim</small></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Pesan</label></div>
                                <div class="col-12 col-md-9"><textarea class="form-control" name="pesan" rows="3" required></textarea><small class="form-text text-muted">Masukan Pesan Konsultasi</small></div>
                            </div>

                            <input type="hidden" name="user_id_pengirim" value="<?= $pengirim->id ?>" />

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