<?php $this->load->view('dashboard/header.php') ?>



<!-- Left Panel -->

<!-- /#left-panel -->

<!-- Left Panel -->

<!-- Right Panel -->



<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Kelas</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Kelas</a></li>
                    <li class="active">Edit Kelas</li>
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
                    <form action="<?= site_url('kelas/update/' . $data->id) ?>" method="post" enctype="multipart/form-data" class="form-horizontal">

                        <div class="card-header">
                            <strong>Edit</strong> Kelas
                        </div>
                        <div class="card-body card-block">

                            <div class="row form-group">
                                <div class="col col-md-12"><label for="text-input" class=" form-control-label">Nama Kelas</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama" placeholder="Nama" class="form-control" value="<?= $data->nama ?>"><small class="form-text text-muted">Masukan nama kelas</small></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Guru Wali</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="guru_id" class="form-control" required>
                                        <option>--Pilih Guru Wali--</option>
                                        <?php foreach ($teachers as $teacher) {
                                            if ($teacher->id == $data->guru_id)
                                                echo "<option value='$teacher->id' selected>$teacher->nama</option>";
                                            else
                                                echo "<option value='$teacher->id'>$teacher->nama</option>";
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