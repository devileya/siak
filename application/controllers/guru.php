<?php
class Guru extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('guru_model');
        $this->load->model('user_model');
        $this->load->helper('url');
    }

    public function index(){
        $data['data'] = $this->guru_model->get();
        $this->load->view('guru/list_guru',$data);
    }

    public function add(){
        $data_user = array (
            'username' => $this->input->post('nip'),
            'password' => $this->input->post('nip'),
            'role_id' => $this->input->post('role_id')
        );
        $user_id = $this->user_model->insert($data_user);

        $data = array(
            'id'  =>$user_id,
            'nip'  => $this->input->post('nip'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('no_hp'),
            'user_id' => $user_id
        );
        $this->guru_model->insert($data);
        redirect('guru');
    }

    public function edit($user_id){
        $data['data'] = $this->guru_model->getById($user_id);
        $this->load->view('guru/edit_guru',$data);
    }

    public function update($user_id){
        $data_user = array (
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'role_id' => $this->input->post('role_id')
        );
        $this->user_model->update($user_id, $data_user);

        $data = array(
            'nip'  => $this->input->post('nip'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('no_hp')
        );
        $this->guru_model->update($user_id, $data);
        redirect('guru');
    }

    public function delete($user_id){
        $this->user_model->delete($user_id);
        redirect('guru');
    }
}
?>