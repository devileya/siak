<?php
class Keuangan_model extends CI_Model{

    public $tabel_name = 'keuangan';

    function __construct()
    {
        parent::__construct();
    }

    function get(){
        $query = $this->db->query("SELECT k.*,s.nis,s.nama nama_siswa
        FROM keuangan k, siswa s
        WHERE k.siswa_id = s.id");
        return $query->result();
    }

    function insert($data)
    {
        $this->db->insert($this->tabel_name,$data);
    }
    
    function getById($id)
    {
        $query = $this->db->query("SELECT k.*,s.nis,s.nama nama_siswa
        FROM keuangan k, siswa s
        WHERE k.siswa_id = s.id and k.siswa_id = s.id");
        return $query->row();
    }
    
    function update($id,$data){
        $this->db->where('id',$id);
        $this->db->update($this->tabel_name,$data);
    }
    
    function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->tabel_name);
    }

    function getByTeacherId($user_id){
        $query = $this->db->query("SELECT u.*,s.nis,s.nama nama_siswa
        FROM keuangan u, siswa s, kelas k
        WHERE u.siswa_id = s.id and s.kelas_id = k.id and k.guru_id = $user_id");
        return $query->result();
    }

    function getByParentId($user_id){
        $query = $this->db->query("SELECT k.*,s.nis,s.nama nama_siswa
        FROM keuangan k, siswa s
        WHERE k.siswa_id = s.id and s.orangtua_id = $user_id");
        return $query->result();
    }

    function getByStudentId($user_id){
        $query = $this->db->query("SELECT u.*,s.nis,s.nama nama_siswa
        FROM keuangan u, siswa s, kelas k
        WHERE u.siswa_id = s.id and s.kelas_id = k.id and u.siswa_id = $user_id");
        return $query->result();
    }
}
?>