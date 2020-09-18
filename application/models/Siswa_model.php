<?php
class Siswa_model extends CI_Model{

    public $tabel_name = 'siswa';

    function __construct()
    {
        parent::__construct();
    }

    function get(){
        $query = $this->db->query("SELECT s.*,k.nama nama_kelas, o.nama nama_orangtua FROM siswa s, kelas k, orangtua o 
        WHERE s.kelas_id = k.id and s.orangtua_id = o.id");
        return $query->result();
    }

    function insert($data)
    {
        $this->db->insert($this->tabel_name,$data);
    }
    
    function getById($user_id)
    {
        $query = $this->db->query("SELECT s.*,k.nama nama_kelas, o.nama nama_orangtua, o.id orangtua_id, u.username, u.password, u.role_id 
        FROM siswa s, kelas k, orangtua o, user u  
        WHERE s.kelas_id = k.id and s.orangtua_id = o.id and s.user_id = u.id and u.id = $user_id");
        return $query->row();
    }
    
    function update($user_id,$data){
        $this->db->where('user_id',$user_id);
        $this->db->update($this->tabel_name,$data);
    }
    
    function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->tabel_name);
    }

    function getByRole($role_id) 
    {
        $query = $this->db->query("SELECT s.* FROM siswa s, user u WHERE s.user_id = u.id and u.role_id = $role_id");
        return $query->result();
    }

    function getByTeacherId($user_id)
    {
        $query = $this->db->query("SELECT s.* FROM siswa s, kelas k, guru g WHERE s.kelas_id = k.id AND k.guru_id = g.id AND g.user_id = $user_id");
        return $query->result();
    }

    function getByParentId($user_id)
    {
        $query = $this->db->query("SELECT s.*,k.nama nama_kelas, o.nama nama_orangtua, o.id orangtua_id, u.username, u.password, u.role_id 
        FROM siswa s, kelas k, orangtua o, user u  
        WHERE s.kelas_id = k.id and s.orangtua_id = o.id and s.user_id = u.id and o.id = $user_id");
        return $query->row();
    }
}
?>