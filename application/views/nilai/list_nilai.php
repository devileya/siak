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
                    <li class="active">List Nilai</li>
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
                        <strong class="card-title">List </strong>Nilai
                        <?php if ($this->session->userdata('role_id') == 3) { ?>
                            <button style="float: right" class="btn btn-warning" onclick="showAdd()"><i class="fa fa-plus-circle"> Tambah Nilai</i></button>
                        <?php } ?>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>NIS</th>
                                    <th>Nama Siswa</th>
                                    <th>Kelas</th>
                                    <th>Mata Pelajaran</th>
                                    <th>UH</th>
                                    <th>UTS</th>
                                    <th>UAS</th>

                                    <?php if ($this->session->userdata('role_id') == 3 || $this->session->userdata('role_id') == 1) { ?>
                                        <th>Aksi</th>
                                    <?php } ?>

                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $key => $item) { ?>
                                    <tr>
                                        <td><?= $item->nis ?></td>
                                        <td><?= $item->nama_siswa ?></td>
                                        <td><?= $item->nama_kelas ?></td>
                                        <td><?= $item->nama_pelajaran ?></td>
                                        <td><?= $item->uh ?></td>
                                        <td><?= $item->uts ?></td>
                                        <td><?= $item->uas ?></td>

                                        <?php if ($this->session->userdata('role_id') == 3 || $this->session->userdata('role_id') == 1) { ?>
                                            <td>
                                                <?= anchor(site_url('nilai/edit/' . $item->id), '<i class="fa fa-pencil" ></i>', 'class="btn btn-warning"'); ?>
                                                <?= anchor(site_url('nilai/delete/' . $item->id), '<i class="fa fa-trash" ></i>', 'class="btn btn-danger"'); ?>
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
                    <form id="nilai_form" action="<?= site_url('nilai/add') ?>" method="post" class="form-horizontal">
                        <div class="card-header">
                            <strong>Tambah </strong>Nilai
                        </div>
                        <div class="card-body card-block">

                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Siswa</label></div>
                                <div class="col-12 col-md-9">
                                    <select id="siswa" name="siswa_id" class="form-control" required>
                                        <option>--Pilih Siswa--</option>
                                        <?php foreach ($students as $student) {
                                            echo "<option value='$student->id'>$student->nama</option>";
                                        } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Kelas</label></div>
                                <div class="col-12 col-md-9">
                                    <select id="kelas" name="kelas_id" class="form-control" required>
                                        <option>--Pilih Kelas--</option>
                                        <?php foreach ($classes as $class) {
                                            echo "<option value='$class->id'>$class->nama</option>";
                                        } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Pelajaran</label></div>
                                <div class="col-12 col-md-9">
                                    <select id="pelajaran" name="pelajaran_id" class="form-control" required>
                                        <option>--Pilih Pelajaran--</option>
                                        <?php foreach ($subjects as $subject) {
                                            echo "<option value='$subject->id'>$subject->nama</option>";
                                        } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Ulangan Harian</label></div>
                                <div class="col-12 col-md-9"><input type="number" min=0 max=100 name="uh" class="form-control" required><small class="form-text text-muted">Masukan Nilai UH</small></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Ujian Tengah Semester</label></div>
                                <div class="col-12 col-md-9"><input type="number" min=0 max=100 name="uts" class="form-control" required><small class="form-text text-muted">Masukan Nilai UTS</small></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-12"><label class=" form-control-label">Ujian Akhir Semester</label></div>
                                <div class="col-12 col-md-9"><input type="number" min=0 max=100 name="uas" class="form-control" required><small class="form-text text-muted">Masukan Nilai UAS</small></div>
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

<!-- Modal -->
<div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Data Sudah Tersedia</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Maaf, Data yang anda inputkan tidak boleh sama dengan yang telah ada.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('dashboard/footer') ?>
<script>
    window.onload = function() {
        document.getElementById("nilai_form").onsubmit = function() {
            var siswa_id = $("#siswa").val();
            var kelas_id = $("#kelas").val();
            var pelajaran_id = $("#pelajaran").val();
            var data = <?php echo json_encode($data); ?>;
            // var checkDataExist = data.filter(item => item.siswa_id == siswa_id && item.kelas_id == kelas_id)
            var isDataExist = false;
            data.map(function(item) {
                if (item.siswa_id == siswa_id && item.kelas_id == kelas_id) {
                    isDataExist = true;
                } else {
                    isDataExist = false;
                }
            });

            if (isDataExist) {
                showErrorModal();
                return false; // cancel submit
            }
            return true; // allow submit
        }
    };

    function showErrorModal() {
        $('#errorModal').modal('toggle');
    }
</script>