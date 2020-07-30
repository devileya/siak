<?php $this->load->view('dashboard/header.php') ?>



<!-- Left Panel -->

<!-- /#left-panel -->

<!-- Left Panel -->

<!-- Right Panel -->



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
                    <li class="active">Edit Absensi</li>
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
                    <form action="<?= site_url('absensi/update/' . $data->id) ?>" method="post" enctype="multipart/form-data" class="form-horizontal">

                        <div class="card-header">
                            <strong>Edit</strong> Absensi
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
                                            if ($data->siswa_id == $student->id)
                                                echo "<option value='$student->id' selected>$student->nama</option>";
                                            else
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
                                            if ($data->pelajaran_id == $subject->id)
                                                echo "<option value='$subject->id' selected>$subject->nama</option>";
                                            else
                                                echo "<option value='$subject->id'>$subject->nama</option>";
                                        } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Status Kehadiran</label></div>
                                <div class="col-12 col-md-9">
                                        <select name="status" class="form-control" required>
                                            <option value="HADIR" <?php if ($data->status == 'HADIR') echo 'selected' ?>>HADIR</option>
                                            <option value="SAKIT" <?php if ($data->status == 'SAKIT') echo 'selected' ?>>SAKIT</option>
                                            <option value="IZIN" <?php if ($data->status == 'IZIN') echo 'selected' ?>>IZIN</option>
                                            <option value="ALPHA" <?php if ($data->status == 'ALPHA') echo 'selected' ?>>ALPHA</option>
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