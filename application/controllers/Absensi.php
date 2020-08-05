<?php
class Absensi extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('absensi_model');
        $this->load->model('siswa_model');
        $this->load->model('pelajaran_model');
        $this->load->helper('url');
    }

    public function index()
    {
        $user_id = $this->session->userdata('user_id');
        $role_id = $this->session->userdata('role_id');

        switch ($role_id) {
            case 1:
                $data['data'] = $this->absensi_model->get();
                $data['students'] = $this->siswa_model->getByRole(5);
                break;
            case 2:
                $data['data'] = $this->absensi_model->getByParentId($user_id);
                break;
            case 3:
                $data['data'] = $this->absensi_model->getByTeacherId($user_id);
                $data['students'] = $this->siswa_model->getByTeacherId($user_id);
                $data['subjects'] = $this->pelajaran_model->get();
                break;
        }
        $this->load->view('absensi/list_absensi', $data);
    }

    public function add()
    {
        $data = array(
            'siswa_id' => $this->input->post('siswa_id'),
            'pelajaran_id' => $this->input->post('pelajaran_id'),
            'status' => $this->input->post('status'),
            'tanggal' => $this->input->post('tanggal'),
            'keterangan' => $this->input->post('keterangan')
        );
        $this->absensi_model->insert($data);
        redirect('absensi');
    }

    public function edit($id)
    {
        $user_id = $this->session->userdata('user_id');
        if ($this->session->userdata('role_id') == 1) {
            $data['students'] = $this->siswa_model->getByRole(5);
        } else {
            $data['students'] = $this->siswa_model->getByTeacherId($user_id);
        }
        $data['data'] = $this->absensi_model->getById($id);
        $data['subjects'] = $this->pelajaran_model->get();
        $this->load->view('absensi/edit_absensi', $data);
    }

    public function update($id)
    {
        $data = array(
            'siswa_id' => $this->input->post('siswa_id'),
            'pelajaran_id' => $this->input->post('pelajaran_id'),
            'status' => $this->input->post('status'),
            'tanggal' => $this->input->post('tanggal'),
            'keterangan' => $this->input->post('keterangan')
        );
        $this->absensi_model->update($id, $data);
        redirect('absensi');
    }

    public function delete($id)
    {
        $this->absensi_model->delete($id);
        redirect('absensi');
    }
}
