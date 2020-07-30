<?php $this->load->view('dashboard/header.php') ?>



<!-- Left Panel -->

<!-- /#left-panel -->

<!-- Left Panel -->

<!-- Right Panel -->



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
                    <li class="active">Edit Pelanggaran</li>
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
                    <form action="<?= site_url('pelanggaran/update/' . $data->id) ?>" method="post" enctype="multipart/form-data" class="form-horizontal">

                        <div class="card-header">
                            <strong>Edit</strong> Pelanggaran
                        </div>
                        <div class="card-body card-block">

                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Tanggal</label></div>
                                <div class="col-12 col-md-9"><input type="date" name="tanggal" class="form-control" required><small class="form-text text-muted">Masukan Tanggal Absensi</small></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-12"><label for="text-input" class=" form-control-label">Pelanggaran</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="keterangan" placeholder="Berkelahi" class="form-control" value="<?= $data->keterangan ?>"><small class="form-text text-muted">Masukan pelanggaran</small></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Siswa</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="siswa_id" class="form-control" required>
                                        <option>--Pilih Siswa--</option>
                                        <?php foreach ($students as $student) {
                                            if ($student->id == $data->siswa_id)
                                                echo "<option value='$student->id' selected>$student->nama</option>";
                                            else
                                                echo "<option value='$student->id'>$student->nama</option>";
                                        } ?>
                                    </select>
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