<?php
class pelanggaran_model extends CI_Model{

    public $tabel_name = 'pelanggaran';

    function __construct()
    {
        parent::__construct();
    }

    function get(){
        $query = $this->db->query("SELECT p.*,s.nama as nama_siswa FROM pelanggaran p, siswa s where p.siswa_id = s.id");
        return $query->result();
    }

    function insert($data)
    {
        $this->db->insert($this->tabel_name,$data);
    }

    function getById($id)
    {
        $query = $this->db->query("SELECT p.*,s.nama as nama_siswa FROM pelanggaran p, siswa s where p.siswa_id = s.id and p.id = $id");
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
        $query = $this->db->query("SELECT p.*,s.nama as nama_siswa FROM pelanggaran p, siswa s, kelas k 
        where p.siswa_id = s.id and s.kelas_id = k.id and k.guru_id = $user_id");
        return $query->result();
    }

    function getByParentId($user_id){
        $query = $this->db->query("SELECT p.*,s.nama as nama_siswa FROM pelanggaran p, siswa s 
        where p.siswa_id = s.id and s.orangtua_id = $user_id");
        return $query->result();
    }
}
