<?php
class Konsultasi_model extends CI_Model{

    public $tabel_name = 'konsultasi';

    function __construct()
    {
        parent::__construct();
    }

    function get(){
        return $this->db->get_where($this->tabel_name)->result();
    }

    function insert($data)
    {
        $this->db->insert($this->tabel_name,$data);
    }
    
    function getById($id)
    {
        $this->db->select('*');
        $this->db->from($this->tabel_name);
        $this->db->where('id',$id);
        return $this->db->get()->row();
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

    function getByStudentId($user_id) {
        $query = $this->db->query("SELECT * FROM konsultasi WHERE user_id_pengirim = $user_id or user_id_penerima = $user_id order by id desc");
        return $query->result();
    }
}
?>