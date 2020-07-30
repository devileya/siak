<?php $this->load->view('dashboard/header.php') ?>



<!-- Left Panel -->

<!-- /#left-panel -->

<!-- Left Panel -->

<!-- Right Panel -->



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
                    <li class="active">Edit Keuangan</li>
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
                    <form action="<?= site_url('keuangan/update/' . $data->id) ?>" method="post" enctype="multipart/form-data" class="form-horizontal">

                        <div class="card-header">
                            <strong>Edit</strong> Keuangan
                        </div>
                        <div class="card-body card-block">

                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Siswa</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="siswa_id" class="form-control" required>
                                        <option>--Pilih Siswa--</option>
                                        <?php foreach ($students as $student) {
                                            if ($data->siswa_id == $student->id)
                                                echo "<option value='$student->id' selected>$student->nama</option>";
                                            else
                                                echo "<option value='$student->id'>$student->nama</option>";
                                        } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Nama Tagihan</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="nama_tagihan" class="form-control" value="<?= $data->nama_tagihan ?>" required><small class="form-text text-muted">Masukan Nama Tagihan</small></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Total Tagihan</label></div>
                                <div class="col-12 col-md-9"><input type="number" min=0 name="total_tagihan" class="form-control" value="<?= $data->total_tagihan ?>" required><small class="form-text text-muted">Masukan Total Tagihan</small></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Total Pembayaran</label></div>
                                <div class="col-12 col-md-9"><input type="number" min=0 name="total_pembayaran" class="form-control" value="<?= $data->total_pembayaran ?>" required><small class="form-text text-muted">Masukan Total Pembayaran</small></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Status Pembayaran</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="status" class="form-control" required>
                                        <option value="Belum Lunas" <?php if ($data->status == 'Belum Lunas') echo 'selected'; ?>>Belum Lunas</option>
                                        <option value="Sudah Lunas" <?php if ($data->status == 'Sudah Lunas') echo 'selected'; ?>>Sudah Lunas</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Keterangan</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="keterangan" class="form-control" value="<?= $data->keterangan ?>"><small class="form-text text-muted">Masukan Keterangan</small></div>
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