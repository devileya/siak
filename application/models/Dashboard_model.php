<?php
class Dashboard_model extends CI_Model{

    public $tabel_name = 'absensi';

    function __construct()
    {
        parent::__construct();
    }

    function getTotalUserGroup(){
        $query = $this->db->query("SELECT role_id,count(id) total_user FROM user GROUP by role_id");
        return $query->result();
    }

    function getTotalNilaiSiswa(){
        $query = $this->db->query("SELECT s.nama, k.nama nama_kelas, sum(uh) total_uh, sum(uts) total_uts, sum(uas) total_uas, count(n.pelajaran_id) total_pelajaran FROM siswa s, nilai n, kelas k WHERE s.kelas_id = k.id and n.siswa_id = s.id GROUP BY siswa_id");
        return $query->result();
    }

    function getSiswaPelanggaranTerbanyak(){
        $query = $this->db->query("SELECT s.nama,k.nama nama_kelas,count(p.siswa_id) total_pelanggaran FROM siswa s,pelanggaran p,kelas k where s.id = p.siswa_id and s.kelas_id = k.id GROUP BY p.siswa_id ORDER BY total_pelanggaran DESC LIMIT 1");
        return $query->row();
    }

    function getSiswaAbsensiTerbanyak(){
        $query = $this->db->query("SELECT s.nama,k.nama nama_kelas,count(a.siswa_id) total_absensi FROM siswa s,absensi a,kelas k where s.id = a.siswa_id and s.kelas_id = k.id GROUP BY a.siswa_id ORDER BY total_absensi DESC LIMIT 1");
        return $query->row();
    }
}
?>