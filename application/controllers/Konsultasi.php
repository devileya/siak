<?php
class Konsultasi extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('konsultasi_model');
        $this->load->model('siswa_model');
        $this->load->model('guru_model');
        $this->load->model('orangtua_model');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['students'] = $this->siswa_model->getByRole(5);
        $user_id = $this->session->userdata('user_id');
        if ($this->session->userdata('role_id') == 4) {
            $data['pengirim'] = $this->guru_model->getById($user_id);
            $data['data'] = $this->konsultasi_model->get();
        } else {
            $data['pengirim'] = $this->orangtua_model->getById($user_id);
            $data['data'] = $this->konsultasi_model->getByParentId($user_id);
        }
        $this->load->view('konsultasi/list_konsultasi', $data);
    }

    public function add()
    {
        $data_user = explode(",",$this->input->post('user'));
        $data = array(
            'user_id_pengirim' => $this->input->post('user_id_pengirim'),
            'nama_pengirim' => $this->input->post('nama_pengirim'),
            'pesan' => $this->input->post('pesan'),
            'user_id_penerima' => $data_user[0],
            'nama_penerima' => $data_user[1],
            'tanggal_dikirim' => date("Y-m-d H:i:s")
        );
        $this->konsultasi_model->insert($data);
        redirect('konsultasi');
    }

    public function edit($id)
    {
        $user_id = $this->session->userdata('user_id');
        if ($this->session->userdata('role_id') == 4) {
            $data['penerima'] = $this->guru_model->getById($user_id);
        } else {
            $data['penerima'] = $this->orangtua_model->getById($user_id);
        }
        $data['data'] = $this->konsultasi_model->getById($id);
        $data['students'] = $this->siswa_model->getByRole(5);
        $this->load->view('konsultasi/edit_konsultasi', $data);
    }

    public function update($id)
    {
        $data = array(
            'user_id_penerima' => $this->input->post('user_id_penerima'),
            'nama_penerima' => $this->input->post('nama_penerima'),
            'balasan' => $this->input->post('balasan'),
            'tanggal_dibalas' => date("Y-m-d H:i:s")
        );
        $this->konsultasi_model->update($id, $data);
        redirect('konsultasi');
    }

    public function delete($id)
    {
        $this->konsultasi_model->delete($id);
        redirect('konsultasi');
    }
}
