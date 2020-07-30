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
                <h1>Keuangan</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Keuangan</a></li>
                    <li class="active">List Keuangan</li>
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
                        <strong class="card-title">List </strong>Keuangan
                        <button style="float: right" class="btn btn-warning" onclick="showAdd()"><i class="fa fa-plus-circle"> Tambah Keuangan</i></button>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>NIS</th>
                                    <th>Nama Siswa</th>
                                    <th>Nama Tagihan</th>
                                    <th>Total Tagihan</th>
                                    <th>Total Pembayaran</th>
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
                                        <td><?= $item->nama_tagihan ?></td>
                                        <td><?= $item->total_tagihan ?></td>
                                        <td><?= $item->total_pembayaran ?></td>
                                        <td><?= $item->status ?></td>
                                        <td><?= $item->keterangan ?></td>

                                        <td>

                                            <?= anchor(site_url('keuangan/edit/' . $item->id), '<i class="fa fa-pencil" ></i>', 'class="btn btn-warning"'); ?>
                                            <?= anchor(site_url('keuangan/delete/' . $item->id), '<i class="fa fa-trash" ></i>', 'class="btn btn-danger"'); ?>

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
                    <form action="<?= site_url('keuangan/add') ?>" method="post" class="form-horizontal">
                        <div class="card-header">
                            <strong>Tambah </strong>Keuangan
                        </div>
                        <div class="card-body card-block">

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
                                <div class="col col-md-12"><label class=" form-control-label">Nama Tagihan</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="nama_tagihan" class="form-control" required><small class="form-text text-muted">Masukan Nama Tagihan</small></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Total Tagihan</label></div>
                                <div class="col-12 col-md-9"><input type="number" min=0 name="total_tagihan" class="form-control" required><small class="form-text text-muted">Masukan Total Tagihan</small></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Total Pembayaran</label></div>
                                <div class="col-12 col-md-9"><input type="number" min=0 name="total_pembayaran" class="form-control" required><small class="form-text text-muted">Masukan Total Pembayaran</small></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Status Pembayaran</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="status" class="form-control" required>
                                        <option value="Belum Lunas">Belum Lunas</option>
                                        <option value="Sudah Lunas">Sudah Lunas</option>
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