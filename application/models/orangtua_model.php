<?php
/**
 * @author    Arif Fadly Siregar <fadlyarif77@gmail.com>
 */
class Orangtua_model extends CI_Model{

    public $tabel_name = 'orangtua';

    function __construct()
    {
        parent::__construct();
    }

    function get(){
        $query = $this->db->query('SELECT o.*,u.username,u.password FROM orangtua o, user u where o.user_id = u.id');
        return $query->result();
    }

    function insert($data)
    {
        $this->db->insert($this->tabel_name,$data);
    }

    function getById($id)
    {
        $query = $this->db->query("SELECT o.*,u.username,u.password FROM orangtua o, user u where o.user_id = u.id and u.id = $id");
        return $query->row();
    }

    function update($id,$data){
        $this->db->where('user_id',$id);
        $this->db->update($this->tabel_name,$data);
    }

    function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->tabel_name);
    }


}
?>