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
        $user_id = $this->session->userdata('user_id');
        $role_id = $this->session->userdata('role_id');

        switch ($role_id) {
            case 1:
                $data['data'] = $this->keuangan_model->get();
                $data['students'] = $this->siswa_model->getByRole(5);
                break;
            case 2:
                $data['data'] = $this->keuangan_model->getByParentId($user_id);
                break;
            case 3:
                $data['data'] = $this->keuangan_model->getByTeacherId($user_id);
                $data['students'] = $this->siswa_model->getByTeacherId($user_id);
                break;
        }
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
        $user_id = $this->session->userdata('user_id');
        if ($this->session->userdata('role_id') == 1) {
            $data['students'] = $this->siswa_model->getByRole(5);
        } else {
            $data['students'] = $this->siswa_model->getByTeacherId($user_id);
        }
        $data['data'] = $this->keuangan_model->getById($id);
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
