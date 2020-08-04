<?php
class siswa extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('siswa_model');
        $this->load->model('user_model');
        $this->load->model('kelas_model');
        $this->load->model('orangtua_model');
        $this->load->helper('url');
    }

    public function index(){
        $data['data'] = $this->siswa_model->get();
        $data['classes'] = $this->kelas_model->get();
        $data['parents'] = $this->orangtua_model->get();
        $this->load->view('siswa/list_siswa',$data);
    }

    public function add(){

        $data_user = array (
            'username' => $this->input->post('nis'),
            'password' => $this->input->post('nis'),
            'role_id' => 5
        );
        $user_id = $this->user_model->insert($data_user);

        $data = array(
            'id'  => $user_id,
            'nis'  => $this->input->post('nis'),
            'nama' => $this->input->post('nama'),
            'jk' => $this->input->post('jk'),
            'ttl' => $this->input->post('ttl'),
            'alamat' => $this->input->post('alamat'),
            'tahun_masuk' => $this->input->post('tahun_masuk'),
            'kelas_id' => $this->input->post('kelas_id'),
            'orangtua_id' => $this->input->post('orangtua_id'),
            'user_id' => $user_id,
        );
        $this->siswa_model->insert($data);
        redirect('siswa');
    }

    public function edit($id){
        $data['data'] = $this->siswa_model->getById($id);
        $data['classes'] = $this->kelas_model->get();
        $data['parents'] = $this->orangtua_model->get();
        $this->load->view('siswa/edit_siswa',$data);
    }

    public function update($id){
        $data_user = array (
            'username' => $this->input->post('username'),
            'password' => $this->input->post('username')
        );
        $this->user_model->update($id, $data_user);

        $data = array(
            'nis'  => $this->input->post('nis'),
            'nama' => $this->input->post('nama'),
            'jk' => $this->input->post('jk'),
            'ttl' => $this->input->post('ttl'),
            'alamat' => $this->input->post('alamat'),
            'tahun_masuk' => $this->input->post('tahun_masuk'),
            'kelas_id' => $this->input->post('kelas_id'),
            'orangtua_id' => $this->input->post('orangtua_id')
        );
        $this->siswa_model->update($id,$data);
        redirect('siswa');
    }

    public function delete($user_id){
        $this->user_model->delete($user_id);
        redirect('siswa');
    }
}
?>