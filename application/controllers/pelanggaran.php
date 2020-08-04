<?php
class pelanggaran extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('pelanggaran_model');
        $this->load->model('siswa_model');
        $this->load->helper('url');
    }

    public function index()
    {
        $user_id = $this->session->userdata('user_id');
        $role_id = $this->session->userdata('role_id');

        switch ($role_id) {
            case 1:
                $data['data'] = $this->pelanggaran_model->get();
                $data['students'] = $this->siswa_model->getByRole(5);
                break;
            case 2:
                $data['data'] = $this->pelanggaran_model->getByParentId($user_id);
                break;
            case 3:
                $data['data'] = $this->pelanggaran_model->getByTeacherId($user_id);
                $data['students'] = $this->siswa_model->getByTeacherId($user_id);
                break;
        }
        $this->load->view('pelanggaran/list_pelanggaran', $data);
    }

    public function add()
    {
        $data = array(
            'keterangan' => $this->input->post('keterangan'),
            'siswa_id' => $this->input->post('siswa_id'),
            'tanggal' => $this->input->post('tanggal'),
        );
        $this->pelanggaran_model->insert($data);
        redirect('pelanggaran');
    }

    public function edit($id)
    {
        $user_id = $this->session->userdata('user_id');
        if ($this->session->userdata('role_id') == 1) {
            $data['students'] = $this->siswa_model->getByRole(5);
        } else {
            $data['students'] = $this->siswa_model->getByTeacherId($user_id);
        }
        $data['data'] = $this->pelanggaran_model->getById($id);
        $this->load->view('pelanggaran/edit_pelanggaran', $data);
    }

    public function update($id)
    {
        $data = array(
            'keterangan' => $this->input->post('keterangan'),
            'siswa_id' => $this->input->post('siswa_id'),
            'tanggal' => $this->input->post('tanggal'),
        );
        $this->pelanggaran_model->update($id, $data);
        redirect('pelanggaran');
    }

    public function delete($id)
    {
        $this->pelanggaran_model->delete($id);
        redirect('pelanggaran');
    }
}
