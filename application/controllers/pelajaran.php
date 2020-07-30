<?php
class pelajaran extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('pelajaran_model');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['data'] = $this->pelajaran_model->get();
        $this->load->view('pelajaran/list_pelajaran', $data);
    }

    public function add()
    {
        $data = array(
            'nama' => $this->input->post('nama')
        );
        $this->pelajaran_model->insert($data);
        redirect('pelajaran');
    }

    public function edit($id)
    {
        $data['data'] = $this->pelajaran_model->getById($id);
        $this->load->view('pelajaran/edit_pelajaran', $data);
    }

    public function update($id)
    {
        $data = array(
            'nama' => $this->input->post('nama')
        );
        $this->pelajaran_model->update($id, $data);
        redirect('pelajaran');
    }

    public function delete($id)
    {
        $this->pelajaran_model->delete($id);
        redirect('pelajaran');
    }
}
