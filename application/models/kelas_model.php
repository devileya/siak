<?php
class kelas_model extends CI_Model{

    public $tabel_name = 'kelas';

    function __construct()
    {
        parent::__construct();
    }

    function get(){
        $query = $this->db->query("SELECT k.*,g.nama as nama_guru FROM kelas k, guru g where k.guru_id = g.id");
        return $query->result();
    }

    function insert($data)
    {
        $this->db->insert($this->tabel_name,$data);
    }

    function getById($id)
    {
        $query = $this->db->query("SELECT k.*,g.nama as nama_guru FROM kelas k, guru g where k.guru_id = g.id and k.id = $id");
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

    function getByTeacherId($user_id)
    {
        $query = $this->db->query("SELECT k.* FROM kelas k WHERE k.guru_id = $user_id");
        return $query->result();
    }
}
