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
        $data['data'] = $this->pelanggaran_model->get();
        $data['students'] = $this->siswa_model->getByRole(5);
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
        $data['data'] = $this->pelanggaran_model->getById($id);
        $data['students'] = $this->siswa_model->getByRole(5);
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
