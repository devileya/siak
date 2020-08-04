<?php $this->load->view('dashboard/header.php') ?>

<body>


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
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-xl-4 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-layout-grid2 text-primary border-primary"></i></div>
                                <div class="stat-content dib">
                                    <div class="stat-text">Total Guru Wali</div>
                                    <div class="stat-digit"><?= $total_guru_wali ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-layout-grid2 text-primary border-primary"></i></div>
                                <div class="stat-content dib">
                                    <div class="stat-text">Total Guru BK</div>
                                    <div class="stat-digit"><?= $total_guru_bk ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-layout-grid2 text-primary border-primary"></i></div>
                                <div class="stat-content dib">
                                    <div class="stat-text">Total Siswa</div>
                                    <div class="stat-digit"><?= $total_siswa ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-user text-success border-success"></i></div>
                                <div class="stat-content dib">
                                    <div class="stat-text">Siswa Terpintar</div>
                                    <?php if ($siswa_terpintar != null) { ?>
                                        <div class="stat-digit"><?= "$siswa_terpintar->nama" ?></div>
                                        <div class="stat-text"><?= "($siswa_terpintar->nama_kelas)" ?></div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-user text-danger border-danger"></i></div>
                                <div class="stat-content dib">
                                    <div class="stat-text">Siswa Pelanggaran Terbanyak</div>
                                    <?php if ($siswa_pelanggaran_terbanyak != null) { ?>
                                        <div class="stat-digit"><?= "$siswa_pelanggaran_terbanyak->nama" ?></div>
                                        <div class="stat-text"><?= "($siswa_pelanggaran_terbanyak->nama_kelas)" ?></div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-user text-warning border-warning"></i></div>
                                <div class="stat-content dib">
                                    <div class="stat-text">Siswa Kehadiran Terendah</div>
                                    <?php if ($siswa_kehadiran_terendah != null) { ?>
                                        <div class="stat-digit"><?= "$siswa_kehadiran_terendah->nama" ?></div>
                                        <div class="stat-text"><?= "($siswa_kehadiran_terendah->nama_kelas)" ?></div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div>


    </div><!-- /#right-panel -->
    <?php $this->load->view('dashboard/footer') ?>