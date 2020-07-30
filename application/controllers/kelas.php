<?php
class kelas extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('kelas_model');
        $this->load->model('guru_model');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['data'] = $this->kelas_model->get();
        $data['teachers'] = $this->guru_model->getByRole(3);
        $this->load->view('kelas/list_kelas', $data);
    }

    public function add()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'guru_id' => $this->input->post('guru_id'),
        );
        $this->kelas_model->insert($data);
        redirect('kelas');
    }

    public function edit($id)
    {
        $data['data'] = $this->kelas_model->getById($id);
        $data['teachers'] = $this->guru_model->getByRole(3);
        $this->load->view('kelas/edit_kelas', $data);
    }

    public function update($id)
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'guru_id' => $this->input->post('guru_id'),
        );
        $this->kelas_model->update($id, $data);
        redirect('kelas');
    }

    public function delete($id)
    {
        $this->kelas_model->delete($id);
        redirect('kelas');
    }
}
