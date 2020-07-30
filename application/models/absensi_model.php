<?php
class absensi_model extends CI_Model{

    public $tabel_name = 'absensi';

    function __construct()
    {
        parent::__construct();
    }

    function get(){
        $query = $this->db->query("SELECT a.*,s.nis,s.nama nama_siswa, p.nama nama_pelajaran FROM absensi a, siswa s, pelajaran p 
        WHERE a.siswa_id = s.id and a.pelajaran_id = p.id");
        return $query->result();
    }

    function insert($data)
    {
        $this->db->insert($this->tabel_name,$data);
    }
    
    function getById($id)
    {
        $query = $this->db->query("SELECT a.*,s.nis,s.nama nama_siswa, p.nama nama_pelajaran FROM absensi a, siswa s, pelajaran p 
        WHERE a.siswa_id = s.id and a.pelajaran_id = p.id and a.id = $id");
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
}
?>