<?php if (!$this->session->userdata('logined') || $this->session->userdata('logined') == false) {
    redirect();
} ?>

<!doctype html>
 <html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistem Informasi Akademik SMAN 6 Pekanbaru</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="icon" type="image/png" href="<?= base_url('asset_login/images/icons/favicon.ico?v=2') ?>"/>
    <link rel="stylesheet" href="<?= base_url('asset_dashboard/assets/css/normalize.css')?>">
    <link rel="stylesheet" href="<?= base_url('asset_dashboard/assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('asset_dashboard/assets/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('asset_dashboard/assets/css/themify-icons.css') ?>">
    <link rel="stylesheet" href="<?= base_url('asset_dashboard/assets/css/flag-icon.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('asset_dashboard/assets/css/cs-skin-elastic.css') ?>">
    <link rel="stylesheet" href="<?= base_url('asset_dashboard/assets/scss/style2.css?v=2') ?>">


    <link type="text/css" href='https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css' rel='stylesheet'>
    <link type="text/css" href='https://cdn.datatables.net/responsive/2.2.1/css/responsive.dataTables.min.css' rel='stylesheet'>
    <link type="text/css" href='https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="<?= base_url('asset_dashboard/assets/scss/style2.css?v=2') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.1.2/css/tempusdominus-bootstrap-4.min.css" integrity="sha512-PMjWzHVtwxdq7m7GIxBot5vdxUY+5aKP9wpKtvnNBZrVv1srI8tU6xvFMzG8crLNcMj/8Xl/WWmo/oAP/40p1g==" crossorigin="anonymous" />

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="<?= site_url('dashboard/index') ?>">SMAN 6&nbsp;<b>PEKANBARU</b></a>
            <a class="navbar-brand hidden" href="./"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="menu-icon">
                    <a href="<?= site_url('dashboard/index') ?>"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>

                <?php if ($this->session->userdata('role_id') < 4) { ?>
                <h3 class="menu-title">Akademik</h3><!-- /.menu-title -->
                <li class="menu-icon">
                    <a href="<?= site_url('nilai') ?>" > <i class="menu-icon fa fa-book"></i>Nilai</a>
                </li>
                <li class="menu-icon">
                    <a href="<?= site_url('absensi') ?>" > <i class="menu-icon fa fa-archive"></i>Absensi</a>
                </li>
                <li class="menu-icon">
                    <a href="<?= site_url('pelanggaran') ?>"> <i class="menu-icon fa fa-archive"></i>Pelanggaran</a>
                </li>
                <?php } ?>

                <?php if ($this->session->userdata('role_id') < 4) { ?>
                <h3 class="menu-title">Keuangan</h3><!-- /.menu-title -->
                <li class="menu-icon">
                    <a href="<?= site_url('keuangan') ?>"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-money"></i>Tagihan</a>
                </li>
                <?php } ?>

                <?php if ($this->session->userdata('role_id') == 1) { ?>
                <h3 class="menu-title">User</h3><!-- /.menu-title -->
                <li class="menu-icon">
                    <a href="<?= site_url('siswa') ?>" > <i class="menu-icon fa fa-users"></i>Siswa</a>
                </li>
                <li class="menu-icon">
                    <a href="<?= site_url('guru') ?>" > <i class="menu-icon fa fa-users"></i>Guru</a>
                </li>
                <li class="menu-icon">
                    <a href="<?= site_url('orangtua') ?>"> <i class="menu-icon fa fa-users"></i>Orang Tua</a>
                </li>
                <?php } ?>

                <?php if ($this->session->userdata('role_id') == 1) { ?>
                <h3 class="menu-title">Data</h3><!-- /.menu-title -->
                <li class="menu-icon">
                    <a href="<?= site_url('kelas') ?>" > <i class="menu-icon fa fa-users"></i>Kelas</a>
                </li>
                <li class="menu-icon">
                    <a href="<?= site_url('pelajaran') ?>" > <i class="menu-icon fa fa-users"></i>Pelajaran</a>
                </li>
                <?php } ?>

                <?php if ($this->session->userdata('role_id') == 4 || $this->session->userdata('role_id') == 2) { ?>
                <h3 class="menu-title">Konsultasi</h3><!-- /.menu-title -->
                <li class="menu-icon">
                    <a href="<?= site_url('konsultasi') ?>"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-money"></i>Konsultasi & Diskusi</a>
                </li>
                <?php } ?>

            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>
<div id="right-panel" class="right-panel">

    <!-- Header-->
    <header id="header" class="header">

        <div class="header-menu">



            <div class="col-sm-12">
                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <h4 style="color: #201F1D">HI, <?= strtoupper($this->session->userdata('username')) ?></h4>
                    </a>

                    <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="<?= site_url('login/editPassword') ?>"><i class="fa fa-power -off"></i>Ubah Password</a>
                        <a class="nav-link" href="<?= site_url('login/logout') ?>"><i class="fa fa-power -off"></i>Logout</a>
                    </div>
                </div>



            </div>
        </div>

    </header>
