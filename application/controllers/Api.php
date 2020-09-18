<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require ('application/libraries/RestController.php');
require ('application/libraries/Format.php');
use chriskacerguis\RestServer\RestController;

class Api extends RestController {

    function __construct()
    {
        parent::__construct();
        $this->load->model('siswa_model');
        $this->load->model('user_model');
        $this->load->model('nilai_model');
        $this->load->model('absensi_model');
        $this->load->model('keuangan_model');
        $this->load->model('pelanggaran_model');
        $this->load->model('konsultasi_model');
    }

    public function user_post() {
        $data = $this->user_model->cek_login(
            $this->post('username'),
            $this->post('password')
        );
        if(!empty($data) && ($data->role_id == 5 || $data->role_id == 2)) {
            if ($data->role_id == 5) $data = $this->siswa_model->getById($data->id);
            else $data = $this->siswa_model->getByParentId($data->id);
            $this->response( [
                'status' => true,
                'message' => 'Login Berhasil',
                'data' => $data
            ], 200);
        }
        else {
            $this->response( [
                'status' => false,
                'message' => 'username/password salah',
                'data' => null
            ], 200);
        }
    }

    public function user_put($user_id) {
        $data = array(
            'username' => $this->post('username'),
            'password' => $this->post('password')
        );
        $this->user_model->update($user_id, $data);
        $this->response( [
            'status' => true,
            'message' => 'Success Change Data',
            'data' => $data
        ], 200);
    }

    public function siswa_get($user_id, $role_id) {
        if ($role_id == "5") $data = $this->siswa_model->getById($user_id);
        else $data = $this->siswa_model->getByParentId($user_id);
        $this->response( [
            'status' => true,
            'message' => 'Success Get Data',
            'data' => $data
        ], 200);
    }

    public function nilai_get($user_id)
    {
        $data = $this->nilai_model->getByStudentId($user_id);
        $this->response( [
            'status' => true,
            'message' => 'Success Get Data',
            'data' => $data
        ], 200);
    }

    public function absensi_get($user_id)
    {
        $data = $this->absensi_model->getByStudentId($user_id);
        $this->response( [
            'status' => true,
            'message' => 'Success Get Data',
            'data' => $data
        ], 200);
    }

    public function tagihan_get($user_id)
    {
        $data = $this->keuangan_model->getByStudentId($user_id);
        $this->response( [
            'status' => true,
            'message' => 'Success Get Data',
            'data' => $data
        ], 200);
    }

    public function pelanggaran_get($user_id)
    {
        $data = $this->pelanggaran_model->getByStudentId($user_id);
        $this->response( [
            'status' => true,
            'message' => 'Success Get Data',
            'data' => $data
        ], 200);
    }

    public function konsultasi_get($user_id, $role_id)
    {
        if ($role_id == "5") $data = $this->konsultasi_model->getByStudentId($user_id);
        else $data = $this->konsultasi_model->getByParentId($user_id);
        $this->response( [
            'status' => true,
            'message' => 'Success Get Data',
            'data' => $data
        ], 200);
    }

    public function konsultasi_post()
    {
        $data = array(
            'user_id_pengirim' => $this->post('user_id_pengirim'),
            'nama_pengirim' => $this->post('nama_pengirim'),
            'pesan' => $this->post('pesan'),
            'tanggal_dikirim' => date("Y-m-d H:i:s")
        );
        $this->konsultasi_model->insert($data);
        $dataResponse = $this->konsultasi_model->getByStudentId($this->post('user_id_pengirim'));
        $this->response( [
            'status' => true,
            'message' => 'Success Add Data',
            'data' => $dataResponse
        ], 200);
    }

    public function konsultasi_put($konsultasi_id)
    {
        $data = array(
            'user_id_penerima' => $this->put('user_id_penerima'),
            'nama_penerima' => $this->put('nama_penerima'),
            'balasan' => $this->put('balasan'),
            'tanggal_dibalas' => date("Y-m-d H:i:s")
        );
        $this->konsultasi_model->update($konsultasi_id, $data);
        $dataResponse = $this->konsultasi_model->getByStudentId($this->put('user_id_penerima'));
        $this->response( [
            'status' => true,
            'message' => 'Success Change Data',
            'data' => $dataResponse
        ], 200);
    }

    public function changepassword_put($user_id) {
        $data = $this->user_model->cek_password($user_id, $this->put('old_password'));
        if(!empty($data) && ($data->role_id == 5 || $data->role_id == 2)) {
            $newData["password"] = $this->put('new_password');
            $this->user_model->update($user_id, $newData);
            $this->response( [
                'status' => true,
                'message' => 'Password Berhasil Diubah.'
            ], 200);
        }
        else {
            $this->response( [
                'status' => false,
                'message' => 'Password Lama Salah.',
                'data' => $this->put('old_password')
            ], 200);
        }
    }
}