<?php
class Guru_model extends CI_Model
{

    public $tabel_name = 'guru';

    function __construct()
    {
        parent::__construct();
    }

    function get()
    {
        $query = $this->db->query("SELECT * FROM guru g, user u where g.user_id = u.id");
        return $query->result();
    }

    function insert($data)
    {
        $this->db->insert($this->tabel_name, $data);
    }

    function getById($user_id)
    {
        $query = $this->db->query("SELECT * FROM guru g, user u where g.user_id = u.id and u.id = $user_id");
        return $query->row();
    }

    function getByRole($role_id)
    {
        $query = $this->db->query("SELECT g.* FROM guru g, user u where g.user_id = u.id and u.role_id = $role_id");
        return $query->result();
    }

    function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update($this->tabel_name, $data);
    }

    function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->tabel_name);
    }
}
