<?php
class Dashboard extends CI_Controller{

  function __construct()
	{
		parent::__construct();
    $this->load->helper('url');
    $this->load->model('dashboard_model');
	}

  public function index(){
    $totalUserGroup = $this->dashboard_model->getTotalUserGroup();
    $totalNilaiSiswa = $this->dashboard_model->getTotalNilaiSiswa();
    $siswaPelanggaranTerbanyak = $this->dashboard_model->getSiswaPelanggaranTerbanyak();
    $siswaKehadiranTerendah = $this->dashboard_model->getSiswaAbsensiTerbanyak();
    $totalGuruWali = 0;
    $totalGuruBK = 0;
    $totalSiswa = 0;
    $avgNilaiSiswaTerpintar = 0;
    $indexSiswaTerpintar = 0;

    // Mendapatkan total user guru wali, guru bk dan siswa
    foreach ($totalUserGroup as $item) {
      switch ($item->role_id) {
        case 3 :
          $totalGuruWali = $item->total_user;
        break;
        case 4 :
          $totalGuruBK = $item->total_user;
        break;
        case 5 :
          $totalSiswa = $item->total_user;
        break;
      }
    }

    // Mencari siswa dengan nilai rerata tertinggi (siswa terpintar)
    foreach ($totalNilaiSiswa as $index => $item) {
      $avgNilaiSiswa = ($item->total_uh+$item->total_uts+$item->total_uas)/(3*$item->total_pelajaran);
      if ($avgNilaiSiswa > $avgNilaiSiswaTerpintar) {
        $avgNilaiSiswaTerpintar = $avgNilaiSiswa;
        $indexSiswaTerpintar = $index;
      }
    }

    $data['total_guru_wali'] = $totalGuruWali;
    $data['total_guru_bk'] = $totalGuruBK;
    $data['total_siswa'] = $totalSiswa;
    $data['siswa_terpintar'] = $totalNilaiSiswa[$indexSiswaTerpintar];
    $data['siswa_pelanggaran_terbanyak'] = $siswaPelanggaranTerbanyak;
    $data['siswa_kehadiran_terendah'] = $siswaKehadiranTerendah;
    $this->load->view('dashboard/dashboard', $data);
  }

}
?>
