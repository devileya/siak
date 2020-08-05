<?php
class Orangtua extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('orangtua_model');
        $this->load->model('user_model');
        $this->load->helper('url');
    }

    public function index(){
        $data['data'] = $this->orangtua_model->get();
        $this->load->view('orangtua/list_orangtua',$data);
    }

    public function add(){
        $data_user = array (
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'role_id' => 2
        );
        $user_id = $this->user_model->insert($data_user);

        $data = array(
            'id'  => $user_id,
            'nama'  => $this->input->post('nama'),
            'user_id' => $user_id
        );
        $this->orangtua_model->insert($data);
        redirect('orangtua');
    }

    public function edit($id){
        $data['data'] = $this->orangtua_model->getById($id);
        $this->load->view('orangtua/edit_orangtua',$data);
    }

    public function update($user_id){
        $dataUser = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        );
        $this->user_model->update($user_id, $dataUser);

        $data = array(
            'nama'  => $this->input->post('nama'),
        );
        $this->orangtua_model->update($user_id, $data);
        redirect('orangtua');
    }

    public function delete($user_id){
        $this->user_model->delete($user_id);
        redirect('orangtua');
    }
}
?>