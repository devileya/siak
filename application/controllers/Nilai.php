<?php
class Nilai extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('nilai_model');
        $this->load->model('siswa_model');
        $this->load->model('pelajaran_model');
        $this->load->model('kelas_model');
        $this->load->helper('url');
    }

    public function index()
    {
        $user_id = $this->session->userdata('user_id');
        $role_id = $this->session->userdata('role_id');

        switch ($role_id) {
            case 1:
                $data['data'] = $this->nilai_model->get();
                $data['students'] = $this->siswa_model->getByRole(5);
                break;
            case 2:
                $data['data'] = $this->nilai_model->getByParentId($user_id);
                break;
            case 3:
                $data['data'] = $this->nilai_model->getByTeacherId($user_id);
                $data['students'] = $this->siswa_model->getByTeacherId($user_id);
                $data['subjects'] = $this->pelajaran_model->get();
                $data['classes'] = $this->kelas_model->getByTeacherId($user_id);
                break;
        }
        $this->load->view('nilai/list_nilai', $data);
    }

    public function add()
    {
        $data = array(
            'siswa_id' => $this->input->post('siswa_id'),
            'kelas_id' => $this->input->post('kelas_id'),
            'pelajaran_id' => $this->input->post('pelajaran_id'),
            'uh' => $this->input->post('uh'),
            'uts' => $this->input->post('uts'),
            'uas' => $this->input->post('uas')
        );
        $this->nilai_model->insert($data);
        redirect('nilai');
    }

    public function edit($id)
    {
        $data['data'] = $this->nilai_model->getById($id);
        $user_id = $this->session->userdata('user_id');
        if ($this->session->userdata('role_id') == 1) {
            $data['students'] = $this->siswa_model->getByRole(5);
            $data['classes'] = $this->kelas_model->get();
        } else {
            $data['students'] = $this->siswa_model->getByTeacherId($user_id);
            $data['classes'] = $this->kelas_model->getByTeacherId($user_id);
        }
        $data['subjects'] = $this->pelajaran_model->get();
        $this->load->view('nilai/edit_nilai', $data);
    }

    public function update($id)
    {
        $data = array(
            'siswa_id' => $this->input->post('siswa_id'),
            'kelas_id' => $this->input->post('kelas_id'),
            'pelajaran_id' => $this->input->post('pelajaran_id'),
            'uh' => $this->input->post('uh'),
            'uts' => $this->input->post('uts'),
            'uas' => $this->input->post('uas')
        );
        $this->nilai_model->update($id, $data);
        redirect('nilai');
    }

    public function delete($id)
    {
        $this->nilai_model->delete($id);
        redirect('nilai');
    }
}
