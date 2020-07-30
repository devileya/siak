<?php
class absensi extends CI_Controller
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
        $data['data'] = $this->absensi_model->get();
        $data['students'] = $this->siswa_model->getByRole(5);
        $data['subjects'] = $this->pelajaran_model->get();
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
        $data['data'] = $this->absensi_model->getById($id);
        $data['students'] = $this->siswa_model->getByRole(5);
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
