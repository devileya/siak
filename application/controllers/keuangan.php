<?php
class keuangan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('keuangan_model');
        $this->load->model('siswa_model');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['data'] = $this->keuangan_model->get();
        $data['students'] = $this->siswa_model->getByRole(5);
        $this->load->view('keuangan/list_keuangan', $data);
    }

    public function add()
    {
        $data = array(
            'siswa_id' => $this->input->post('siswa_id'),
            'nama_tagihan' => $this->input->post('nama_tagihan'),
            'total_tagihan' => $this->input->post('total_tagihan'),
            'total_pembayaran' => $this->input->post('total_pembayaran'),
            'status' => $this->input->post('status'),
            'keterangan' => $this->input->post('keterangan'),
            'tanggal' => date("Y-m-d")
        );
        $this->keuangan_model->insert($data);
        redirect('keuangan');
    }

    public function edit($id)
    {
        $data['data'] = $this->keuangan_model->getById($id);
        $data['students'] = $this->siswa_model->getByRole(5);
        $this->load->view('keuangan/edit_keuangan', $data);
    }

    public function update($id)
    {
        $data = array(
            'siswa_id' => $this->input->post('siswa_id'),
            'nama_tagihan' => $this->input->post('nama_tagihan'),
            'total_tagihan' => $this->input->post('total_tagihan'),
            'total_pembayaran' => $this->input->post('total_pembayaran'),
            'status' => $this->input->post('status'),
            'keterangan' => $this->input->post('keterangan')
        );
        $this->keuangan_model->update($id, $data);
        redirect('keuangan');
    }

    public function delete($id)
    {
        $this->keuangan_model->delete($id);
        redirect('keuangan');
    }
}
