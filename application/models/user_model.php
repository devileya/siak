<?php

/**
 * @author    Arif Fadly Siregar <fadlyarif77@gmail.com>
 */
class user_model extends CI_Model{

    public $tabel_name = 'user';

    function __construct()
    {
        parent::__construct();
    }

    function get()
    {
        return $this->db->get($this->tabel_name)->result();
    }

    function insert($data)
    {
        $this->db->insert($this->tabel_name,$data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }

    function getById($id)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id',$id);
        return $this->db->get()->row();
    }

    function update($id,$data)
    {
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