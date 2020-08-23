<?php
class Nilai_model extends CI_Model{

    public $tabel_name = 'nilai';

    function __construct()
    {
        parent::__construct();
    }

    function get(){
        $query = $this->db->query("SELECT n.*,s.nis,s.nama nama_siswa, p.nama nama_pelajaran, k.nama nama_kelas 
        FROM nilai n, siswa s, pelajaran p, kelas k 
        WHERE n.siswa_id = s.id and n.pelajaran_id = p.id and n.kelas_id = k.id");
        return $query->result();
    }

    function insert($data)
    {
        $this->db->insert($this->tabel_name,$data);
    }
    
    function getById($id)
    {
        $query = $this->db->query("SELECT n.*,s.nis,s.nama nama_siswa, p.nama nama_pelajaran, k.nama nama_kelas 
        FROM nilai n, siswa s, pelajaran p, kelas k 
        WHERE n.siswa_id = s.id and n.pelajaran_id = p.id and n.kelas_id = k.id and n.id = $id");
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
        $query = $this->db->query("SELECT n.*,s.nis,s.nama nama_siswa, p.nama nama_pelajaran, k.nama nama_kelas 
        FROM nilai n, siswa s, pelajaran p, kelas k
        WHERE n.siswa_id = s.id and n.pelajaran_id = p.id and n.kelas_id = k.id and k.guru_id = $user_id");
        return $query->result();
    }
    
    function getByParentId($user_id){
        $query = $this->db->query("SELECT n.*,s.nis,s.nama nama_siswa, p.nama nama_pelajaran, k.nama nama_kelas 
        FROM nilai n, siswa s, pelajaran p, kelas k
        WHERE n.siswa_id = s.id and n.pelajaran_id = p.id and n.kelas_id = k.id and s.orangtua_id = $user_id");
        return $query->result();
    }

    function getByStudentId($user_id){
        $query = $this->db->query("SELECT n.*,s.nis,s.nama nama_siswa, p.nama nama_pelajaran, k.nama nama_kelas 
        FROM nilai n, siswa s, pelajaran p, kelas k
        WHERE n.siswa_id = s.id and n.pelajaran_id = p.id and n.kelas_id = k.id and n.siswa_id = $user_id");
        return $query->result();
    }
}
?>