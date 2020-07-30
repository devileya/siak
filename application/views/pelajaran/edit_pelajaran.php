<?php $this->load->view('dashboard/header.php') ?>



        <!-- Left Panel -->

    <!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->



        <div class="breadcrumbs">
          <div class="col-sm-4">
              <div class="page-header float-left">
                  <div class="page-title">
                      <h1>Pelajaran</h1>
                  </div>
              </div>
          </div>
          <div class="col-sm-8">
              <div class="page-header float-right">
                  <div class="page-title">
                      <ol class="breadcrumb text-right">
                          <li><a href="#">Dashboard</a></li>
                          <li><a href="#">Pelajaran</a></li>
                          <li class="active">Edit Pelajaran</li>
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
                            <form action="<?= site_url('pelajaran/update/'.$data->id) ?>" method="post" enctype="multipart/form-data" class="form-horizontal">

                            <div class="card-header">
                            <strong>Edit</strong> Pelajaran
                          </div>
                          <div class="card-body card-block">

                              <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Pelajaran</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama" placeholder="Nama Pelajaran" class="form-control" value="<?= $data->nama ?>"><small class="form-text text-muted">Masukan nama pelajaran</small></div>
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
