<?php $this->load->view('dashboard/header.php') ?>



<!-- Left Panel -->

<!-- /#left-panel -->

<!-- Left Panel -->

<!-- Right Panel -->



<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Nilai</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Nilai</a></li>
                    <li class="active">Edit Nilai</li>
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
                    <form action="<?= site_url('nilai/update/' . $data->id) ?>" method="post" enctype="multipart/form-data" class="form-horizontal">

                        <div class="card-header">
                            <strong>Edit</strong> Nilai
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
                                <div class="col col-md-12"><label class=" form-control-label">Kelas</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="kelas_id" class="form-control" required>
                                        <option>--Pilih Kelas--</option>
                                        <?php foreach ($classes as $class) {
                                            if ($data->kelas_id == $class->id)
                                                echo "<option value='$class->id' selected>$class->nama</option>";
                                            else
                                                echo "<option value='$class->id'>$class->nama</option>";
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
                                <div class="col col-md-12"><label class=" form-control-label">Ulangan Harian</label></div>
                                <div class="col-12 col-md-9"><input type="number" min=0 max=100 name="uh" class="form-control" value="<?= $data->uh ?>" required><small class="form-text text-muted">Masukan Nilai UH</small></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Ujian Tengah Semester</label></div>
                                <div class="col-12 col-md-9"><input type="number" min=0 max=100 name="uts" class="form-control" value="<?= $data->uts ?>" required><small class="form-text text-muted">Masukan Nilai UTS</small></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Ujian Akhir Semester</label></div>
                                <div class="col-12 col-md-9"><input type="number" min=0 max=100 name="uas" class="form-control" value="<?= $data->uas ?>" required><small class="form-text text-muted">Masukan Nilai UAS</small></div>
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